<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

    Route::get('/sitemap', function(){
        SitemapGenerator::create('https://kiblegah.test/')->getSitemap()->writeToDisk('public', 'sitemap.xml');
    });

    Auth::routes();



    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/kategori/{url}', 'HomeController@kategori')->name('kategori');
    Route::get('/kargosorgulama', 'HomeController@kargosorgulama')->name('kargosorgulama');
    Route::get('/kargosorgulamaGet', 'HomeController@kargosorgulamaget')->name('kargosorgulamaget');
    Route::get('/sepet', 'HomeController@sepet')->name('sepet');
    Route::get('/siparis', 'HomeController@siparis')->name('siparis');
    Route::get('/urun/{url}', 'HomeController@urun')->name('urun');
    Route::get('/iletisim', 'HomeController@iletisim')->name('iletisim');
    Route::get('/arama', 'HomeController@search')->name('search');
    Route::post('/bulten', 'HomeController@mailsubcribes')->name('mailsubcribes');
    Route::post('/sepete-ekle', 'HomeController@addtocart')->name('sepeteekle');
    Route::post('/hizli-satin-al', 'HomeController@hizlisatinal')->name('hizlisatinal');
    Route::post('/sepet-cikar/{rowId}', 'HomeController@cartdelete')->name('sepetcikar');
    Route::post('/sepet-bosalt}', 'HomeController@cartdestroy')->name('sepetbosalt');
    Route::get('/kurumsal/{url}', 'HomeController@kurumsal')->name('kurumsal');

    Route::get('/kampanya', 'HomeController@kampanya')->name('kampanya');
    Route::get('/kampanya-kiblegah', 'HomeController@kiblegahkampanya')->name('kiblegahkampanya');
    Route::get('/kampanya-120sozcuk', 'HomeController@sozcukkampanya')->name('120sozcukkampanya');
    Route::get('/kampanya-120hayvan', 'HomeController@hayvankampanya')->name('120hayvankampanya');
    Route::get('/kampanya-ilmihal', 'HomeController@ilmihalkampanya')->name('ilmihalkampanya');

    Route::post('/siparis/kaydet', 'HomeController@kaydet')->name('kaydet');
    Route::get('/siparis/sonuc', 'HomeController@sonuc')->name('sonuc');

    Route::get('/mail', function (){
       return view('frontend.mail.siparis');
    });

    Route::group(["prefix"=>"go", 'middleware' => ['auth', 'admin']],function() {
        Route::get('/', 'DashboardController@index')->name('go');
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
        Route::auto('/campagin', CampaginController::class);
        Route::auto('/comment', CommentController::class);
    });
