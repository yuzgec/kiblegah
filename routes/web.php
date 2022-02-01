<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

    Auth::routes();

    Route::get('/sitemap', function(){
        SitemapGenerator::create(\route('home'))->writeToFile('sitemap.xml');
    });

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/kategori/{url}', 'HomeController@kategori')->name('kategori');
    Route::get('/kargosorgulama', 'HomeController@kargosorgulama')->name('kargosorgulama');
    Route::get('/sepet', 'HomeController@sepet')->name('sepet');
    Route::get('/siparis', 'HomeController@siparis')->name('siparis');

    Route::get('/iletisim', 'HomeController@iletisim')->name('iletisim');

    Route::group(["prefix"=>"go", 'middleware' => ['auth']],function() {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::auto('/page', PageController::class);
        Route::auto('/page-categories', PageCategoryController::class);
        Route::auto('/blog', BlogController::class);
        Route::auto('/blog-categories', BlogCategoryController::class);
        Route::auto('/service', ServiceController::class);
        Route::auto('/service-categories', ServiceCategoryController::class);
        Route::auto('/banner', BannerController::class);
        Route::auto('/banner-area', BannerAreaController::class);
        Route::auto('/faq', FaqController::class);
        Route::auto('/faq-categories', FaqCategoryController::class);
        Route::auto('/gallery', GalleryController::class);
        Route::auto('/gallery-categories', GalleryCategoryController::class);
        Route::auto('/price', PriceController::class);
        Route::auto('/price-categories', PriceCategoryController::class);
        Route::auto('/project', ProjectController::class);
        Route::auto('/project-categories', ProjectCategoryController::class);
        Route::auto('/slider', SliderController::class);
        Route::auto('/video', VideoController::class);
        Route::auto('/video-categories', VideoCategoryController::class);
        Route::auto('/settings', SettingController::class);
        Route::auto('/contact', ContactController::class);
        Route::auto('/team', TeamController::class);
        Route::auto('/team-categories', TeamCategoryController::class);
        Route::auto('/product', ProductController::class);
        Route::auto('/product-categories', ProductCategoryController::class);
    });
