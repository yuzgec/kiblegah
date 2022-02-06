<?php

namespace App\Http\Controllers;

use App\Http\Requests\CargoRequest;
use App\Http\Requests\OrderRequest;
use App\Models\Basket;
use App\Models\Comment;
use App\Models\MailSubcribes;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ShopCart;
use App\Models\Slider;
use Carbon\Carbon;
use CyrildeWit\EloquentViewable\Support\Period;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {
        $Products = Product::select('id', 'title', 'price', 'old_price', 'slug','bestselling')->orderBy('rank')->get();
        $Slider = Slider::with('getProduct')->get();
        return view('frontend.index', compact('Products','Slider'));
    }

    public function kategori($url){
        $Detay = ProductCategory::where('slug', $url)->select('id','title','slug')->first();
        $ProductList = Product::join('product_category_pivots', 'product_category_pivots.product_id', '=', 'products.id' )
            ->join('product_categories', 'product_categories.id', '=', 'product_category_pivots.category_id')
            ->where('product_category_pivots.category_id', '=', $Detay->id)
            ->where(['category_id' => $Detay->id])
            ->select('products.id','products.title','products.slug','products.price','products.old_price','products.slug','product_category_pivots.category_id', 'product_categories.parent_id')
            ->inRandomOrder()
            ->paginate(12);
        //dd($Pro);
        return view('frontend.kategori.index', compact('Detay', 'ProductList'));
    }

    public function iletisim(){
        return view('frontend.sayfa.iletisim');
    }

    public function sepet(){
        if (Cart::content()->count() === 0){
            return redirect()->route('home');
        }
        $Products = Product::select('id', 'title', 'price', 'old_price', 'slug')->get();
        return view('frontend.shop.sepet',compact('Products'));
    }

    public function siparis(){
        if (Cart::content()->count() === 0){
            return redirect()->route('home');
        }
        return view('frontend.shop.siparis');
    }

    public function urun($url){
        $Detay = Product::with('getCategory')->where('slug', $url)->firstOrFail();
        views($Detay)->cooldown(60)->record();
        $Count = views($Detay)->unique()->period(Period::create(Carbon::today()))->count();;
        $Comments = Comment::where('product_id', $Detay->id)->where('status', 1)->inRandomOrder()->paginate(12);
        return view('frontend.urun.index', compact('Detay','Count','Comments'));
    }

    public function kargosorgulama(){
        //dd($request->all());
        return view('frontend.kargo.index');
    }

    public function kaydet(OrderRequest $request){

        $Cart_Id = time();
        DB::transaction(function () use ($request, $Cart_Id) {
            $ShopCart                   = new ShopCart;
            $ShopCart->cart_id          = $Cart_Id ;
            $ShopCart->user_id          = $Cart_Id ;
            $ShopCart->basket_total     = Cart::total();

            $ShopCart->name             = $request->name;
            $ShopCart->surname          = $request->surname;
            $ShopCart->email            = $request->email;
            $ShopCart->phone            = $request->phone;
            $ShopCart->address          = $request->address;
            $ShopCart->city             = $request->city;
            $ShopCart->province         = $request->province;
            $ShopCart->note             = $request->note;
            $ShopCart->save();

            foreach (Cart::content() as $c) {
                $Order                  = new Order;
                $Order->cart_id         = $Cart_Id;
                $Order->product_id      = $c->id;
                $Order->name            = $c->name;
                $Order->qty             = $c->qty;
                $Order->price           = $c->price;
                $Order->save();
            }

            $Cart = Cart::content();

            if($request->has('email')){
                Mail::send("frontend.mail.siparis",compact('Cart', 'ShopCart'),function ($message) use($ShopCart) {
                    $message->to($ShopCart->email)->subject($ShopCart->name.' '. $ShopCart->surname.' Siparişiniz başarıyla oluşturmuştur.');
                });
            }

            Mail::send("frontend.mail.siparis",compact('Cart', 'ShopCart'),function ($message) use($ShopCart) {
                $message->to(config('settings.email2'))->subject($ShopCart->name.' '. $ShopCart->surname.' Siparişiniz başarıyla oluşturmuştur.');
            });

            $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://panel.nac.com.tr/api/json/syncreply/SendInstantSms',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 5,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
				"Credential": {
				"Username":"kiblegah",
				"Password":"KiBlEgAh.ReK2600",
				"ResellerID":1298
				},
				"Sms": {
				"ToMsisdns": [
				{
				"Msisdn": '.$ShopCart->phone.',
				"Name": "",
				"Surname": "",
				"CustomField1": "[Mesaj1]:'.'test'.'"
				}
				],
				"ToGroups": [
				0
				],
				"IsCreateFromTeplate": true,
				"SmsTitle": "KIBLEGAH",
				"SmsContent": "[Mesaj1]",
				"SmsSendingType": "ByNumber",
				"SmsCoding": "SmsCoding",
				"SenderName": "KIBLEGAH",
				"DataCoding": "Default"

				}
				}',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);

            Cart::destroy();
        });

        return redirect()->route('sonuc',['no'=>$Cart_Id]);
    }

    public function sonuc(){
        $Summary  = Order::where('cart_id',request('no') )->get();
        $Customer = ShopCart::where('cart_id',request('no')  )->firstOrFail();
        return view('frontend.shop.sonuc', compact('Summary', 'Customer'));
    }

    public function addtocart(Request $request){

        $p = Product::find($request->id);
        Basket::create(['product_id' => $p->id]);
        Cart::add(
        [
            'id' => $p->id,
            'name' => $p->title,
            'price' => $p->price,
            'weight' => 0,
            'qty' => $request->qty,
            'options' => [
                'image' => (!$p->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg' : $p->getFirstMediaUrl('page', 'small'),
                'cargo' => 0,
                'campagin' => false,
            ]
        ]);

        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('sepet');
    }

    public function cartdelete($rowId){

        Cart::remove($rowId);

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('sepet');
    }

    public function cartdestroy(){
        Cart::destroy();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('home');
    }

    public function mailsubcribes(Request $request){
        MailSubcribes::create(['email_address' => $request->email, 'ip_address' => $request->ip()]);
        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('home');
    }
}
