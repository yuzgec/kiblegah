<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Comment;
use App\Models\MailSubcribes;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductCategory;
use Carbon\Carbon;
use CyrildeWit\EloquentViewable\Support\Period;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $Products = Product::select('id', 'title', 'price', 'old_price', 'slug','bestselling')->orderBy('rank')->get();
        //dd(Cart::content());
        return view('frontend.index', compact('Products'));
    }

    public function kategori($url){
        $Detay = ProductCategory::where('slug', $url)->select('id','title','slug')->first();
        $ProductList = Product::join('product_category_pivots', 'product_category_pivots.product_id', '=', 'products.id' )
            ->join('product_categories', 'product_categories.id', '=', 'product_category_pivots.category_id')
            ->where('product_category_pivots.category_id', '=', $Detay->id)
            ->where(['category_id' => $Detay->id])
            ->select('products.id','products.title','products.slug','products.price','products.old_price','products.slug','product_category_pivots.category_id', 'product_categories.parent_id')
            ->inRandomOrder()
            ->paginate(9);
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
        return view('frontend.shop.siparis');
    }

    public function urun($url){
        $Detay = Product::with('getCategory')->where('slug', $url)->firstOrFail();
        views($Detay)->cooldown(60)->record();
        $Count = views($Detay)->unique()->period(Period::create(Carbon::today()))->count();;
        $Comments = Comment::where('product_id', $Detay->id)->get();
        return view('frontend.urun.index', compact('Detay','Count','Comments'));
    }

    public function kargosorgulama(){
        return view('frontend.kargo.index');
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
