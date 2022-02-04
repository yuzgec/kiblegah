<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\PageCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewShareProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        //dd(time());
        if (! app()->runningInConsole()) {
            Paginator::useBootstrap();
            config()->set('settings', Setting::pluck('value','item')->all());
            $Pages = Cache::remember('pages',now()->addSeconds(10), function () {return Page::with('getCategory')->get();});
            $Page_Categories = Cache::remember('page_categories',now()->addSeconds(10), function () {return PageCategory::all(); });
            $Product_Categories = Cache::remember('product_categories',now()->addSecond(5), function () { return ProductCategory::with('cat')->where('status', 1)->get();});
            $Product = Cache::remember('product',now()->addSecond(5), function () { return Product::where('status', 1)->get();});

            View::share([
                'Pages' => $Pages,
                'Page_Categories' => $Page_Categories,
                'Product_Categories' => $Product_Categories,
                'Product' => $Product
            ]);
        }

    }
}
