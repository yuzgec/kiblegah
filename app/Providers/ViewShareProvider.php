<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Page;
use App\Models\PageCategory;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Setting;
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

        if (! app()->runningInConsole()) {

            config()->set('settings', Setting::pluck('value','item')->all());

            /* $Pages = Cache::remember('pages',now()->addSeconds(10), function () {return Page::with('getCategory')->get();});
             $Page_Categories = Cache::remember('page_categories',now()->addSeconds(10), function () {return PageCategory::all(); });
             $Service = Cache::remember('services',now()->addSeconds(10), function () {return Service::with('getCategory')->get();});
             $Service_Categories = Cache::remember('service_categories',now()->addSeconds(10), function () {return ServiceCategory::all();});
             $Blog = Cache::remember('blog',now()->addSeconds(10), function () {return Blog::with('getCategory')->get();});*/

            $Pages = Page::all();
            $Page_Categories = PageCategory::all();
            $Product_Categories = Cache::remember('product_categories',now()->addMinutes(60), function () { return ProductCategory::all();});

            View::share([
                'Pages' => $Pages,
                'Page_Categories' => $Page_Categories,
                'Product_Categories' => $Product_Categories,
            ]);
        }

    }
}
