<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\VideoCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $Show = Page::findOrFail(1);
        return view('frontend.index', compact('Show'));
    }

    public function kategori($url){

        $Detay = ProductCategory::where('slug', $url)->first();
        return view('frontend.kategori.index', compact('Detay'));
    }

    public function iletisim(){
        return view('frontend.iletisim');
    }

    public function sepet(){
        return view('frontend.shop.sepet');
    }

    public function siparis(){
        return view('frontend.shop.siparis');
    }

    public function urun($url){
        $Detay = Product::where('slug', $url)->firstOrFail();
        return view('frontend.shop.siparis', compact('Detay'));
    }

    public function kargosorgulama(){
        return view('frontend.kargo.index');
    }
}
