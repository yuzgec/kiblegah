<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\MailSubcribes;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductCategory;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $Show = Page::findOrFail(1);
        //dd(Cart::content());
        return view('frontend.index', compact('Show'));
    }

    public function kategori($url){

        $Detay = ProductCategory::where('slug', $url)->first();
        return view('frontend.kategori.index', compact('Detay'));
    }

    public function iletisim(){
        return view('frontend.page.iletisim');
    }

    public function sepet(){

        if (Cart::content()->count() <= 0){
            return view('frontend.index');
        }
        return view('frontend.shop.sepet');
    }

    public function siparis(){
        return view('frontend.shop.siparis');
    }

    public function urun($url){
        $Detay = Product::where('slug', $url)->firstOrFail();
        return view('frontend.urun.index', compact('Detay'));
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
