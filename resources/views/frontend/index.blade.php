@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')
    <div class="container">
        <div class="mb-5">
            <div class="row">
                <div class="col-md-auto mb-6 mb-md-0">
                    <div class="p-3 border border-width-2 border-primary borders-radius-20 bg-white min-width-370">
                        <div class="d-flex justify-content-between align-items-center m-1 ml-2">
                            <h3 class="font-size-22 mb-0 font-weight-normal text-lh-28 max-width-120">ÖZEL KAMPANYA</h3>
                            <div class="d-flex align-items-center flex-column justify-content-center bg-primary rounded-pill height-75 width-75 text-lh-1">
                                <span class="font-size-12">Kazanç</span>
                                <div class="font-size-20 font-weight-bold">39.90</div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center">
                                <img class="img-fluid" src="https://www.kiblegahaileoyunlari.com.tr/goadmin/files/config/images/urun/kiblegah_aile_oyunlari_61dee6fdd27a5.jpg" alt="Kampanya" width="300px">
                            </a>
                        </div>
                        <h5 class="mb-2 font-size-14 text-center mx-auto max-width-180 text-lh-18">
                            <a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Kıblegah Aile Oyunu Yüzük Hediyeli</a>
                        </h5>
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <del class="font-size-18 mr-2 text-gray-2">69.90₺</del>
                            <ins class="font-size-30 text-red text-decoration-none">59.90₺</ins>
                        </div>
                        <div class="mb-3 mx-2">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="">Kalan: <strong>135</strong></span>
                                <span class="">Stok: <strong>500</strong></span>
                            </div>
                            <div class="rounded-pill bg-gray-3 height-20 position-relative">
                                <span class="position-absolute left-0 top-0 bottom-0 rounded-pill w-50 bg-primary"></span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <h6 class="font-size-15 text-gray-2 text-center mb-3">İndirimli ürünü almak için acele edin</h6>
                            <div class="js-countdown d-flex justify-content-center"
                                 data-end-date="2022/02/02"
                                 data-hours-format="%H"
                                 data-minutes-format="%M"
                                 data-seconds-format="%S">
                                <div class="text-lh-1">
                                    <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                        <span class="js-cd-hours"></span>
                                    </div>
                                    <div class="text-gray-2 font-size-12 text-center">SAAT</div>
                                </div>
                                <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                                <div class="text-lh-1">
                                    <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                        <span class="js-cd-minutes"></span>
                                    </div>
                                    <div class="text-gray-2 font-size-12 text-center">DAKİKA</div>
                                </div>
                                <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                                <div class="text-lh-1">
                                    <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                        <span class="js-cd-seconds"></span>
                                    </div>
                                    <div class="text-gray-2 font-size-12 text-center">SANİYE</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-none p-3 border border-width-2 border-primary borders-radius-20 bg-white min-width-370">
                        <div class="d-flex justify-content-between align-items-center m-1 ml-2">
                            <div class="bg-gray-1 bg-animation rounded height-20 w-50"></div>
                            <div class="bg-gray-1 bg-animation u-lg-avatar rounded-circle"></div>
                        </div>
                        <div class="mb-4">
                            <div class="bg-gray-1 height-300"></div>
                        </div>
                        <div class="mb-4">
                            <div class="bg-gray-1 bg-animation rounded height-20 w-60 mx-auto mb-1"></div>
                            <div class="bg-gray-1 bg-animation rounded height-20 w-50 mx-auto"></div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <div class="bg-gray-1 bg-animation rounded height-12 w-20 ml-auto mr-2"></div>
                            <div class="bg-gray-1 bg-animation rounded height-20 w-30 mr-auto"></div>
                        </div>
                        <div class="mb-3 mx-2">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="bg-gray-1 bg-animation rounded height-12 w-30"></div>
                                <div class="bg-gray-1 bg-animation rounded height-12 w-30"></div>
                            </div>
                            <div class="rounded-pill bg-gray-1 height-20 position-relative">

                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="bg-gray-1 bg-animation rounded height-12 w-60 mx-auto mb-3"></div>
                            <div class="d-flex justify-content-center">
                                <div class="">
                                    <div class="u-avatar bg-gray-1 bg-animation rounded mb-1"></div>
                                    <div class="bg-gray-1 bg-animation rounded height-12 w-90 mx-auto"></div>
                                </div>
                                <div class="mx-1 pt-1 text-gray-1 font-size-24">:</div>
                                <div class="">
                                    <div class="u-avatar bg-gray-1 bg-animation rounded mb-1"></div>
                                    <div class="bg-gray-1 bg-animation rounded height-12 w-90 mx-auto"></div>
                                </div>
                                <div class="mx-1 pt-1 text-gray-1 font-size-24">:</div>
                                <div class="">
                                    <div class="u-avatar bg-gray-1 bg-animation rounded mb-1"></div>
                                    <div class="bg-gray-1 bg-animation rounded height-12 w-90 mx-auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                                <ul class="row list-unstyled products-group no-gutters">
                                    <x-product-list limit="6"></x-product-list>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mb-4">
            <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                <h3 class="section-title section-title__full mb-0 pb-2 font-size-22"><b>EN ÇOK</b> SATILAN ÜRÜNLER</h3>
                <a class="d-block text-gray-16" href="../shop/product-categories-7-column-full-width.html">Hepsini Gör <i class="ec ec-arrow-right-categproes"></i></a>
            </div>
            <div class="js-slick-carousel u-slick overflow-hidden u-slick-overflow-visble pt-3 pb-6 px-1"
                 data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4"
                 data-slides-show="5"
                 data-slides-scroll="1"
                 data-responsive='[{
                                  "breakpoint": 1400,
                                  "settings": {
                                    "slidesToShow": 4
                                  }
                                }, {
                                    "breakpoint": 1200,
                                    "settings": {
                                      "slidesToShow": 3
                                    }
                                }, {
                                  "breakpoint": 992,
                                  "settings": {
                                    "slidesToShow": 3
                                  }
                                }, {
                                  "breakpoint": 768,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }, {
                                  "breakpoint": 554,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }]'>
                @foreach($Products as $item)
                <div class="js-slide products-group">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <h5 class="mb-1 product-item__title">
                                    <a href="{ route('urun', $item->slug) }}" class="text-blue font-weight-bold" title="{{ $item->title }}"> {{ $item->title }}</a>
                                </h5>
                                <div class="mb-2">
                                    <a href="{{ route('urun', $item->slug) }}" class="d-block text-center" title="{{ $item->title }}">
                                        <img class="img-fluid" src="{{ (!$item->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $item->getFirstMediaUrl('page')}}" alt="{{ $item->title }}">
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1 text-center">
                                    <div class="prodcut-priceflex-wrap position-relative text-center">
                                        <div class="text-center">
                                            <ins class="font-size-20 text-black text-decoration-none mr-2 font-weight-bold text-center">
                                                {{ money($item->price) }}₺ -
                                                <del class="font-size-1">
                                                    {{ money($item->old_price) }}
                                                </del>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Trending products -->
        <!-- Full banner -->
        <div class="mb-8">
            <a href="../shop/shop.html" class="d-block text-gray-90">
                <div class="" style="background-image: url(frontend/assets/img/1400X206/img1.jpg);">
                    <div class="space-top-2-md p-4 pt-6 pt-md-8 pt-lg-6 pt-xl-8 pb-lg-4 px-xl-8 px-lg-6">
                        <div class="flex-horizontal-center mt-lg-3 mt-xl-0 overflow-auto overflow-md-visble">
                            <h1 class="text-lh-38 font-size-32 font-weight-light mb-0 flex-shrink-0 flex-md-shrink-1">SHOP AND <strong>SAVE BIG</strong> ON HOTTEST TABLETS</h1>
                            <div class="ml-5 flex-content-center flex-shrink-0">
                                <div class="bg-primary rounded-lg px-6 py-2">
                                    <em class="font-size-14 font-weight-light">STARTING AT</em>
                                    <div class="font-size-30 font-weight-bold text-lh-1">
                                        <sup class="">$</sup>79<sup class="">99</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- End Full banner -->
        <!-- Laptops & Computers -->
        <div class="mb-6">
            <!-- Nav nav-pills -->
            <div class="position-relative text-center z-index-2">
                <div class="d-flex justify-content-between border-bottom border-color-1 flex-xl-nowrap flex-wrap border-md-down-top-0 border-lg-down-bottom-0 mb-3">
                    <h3 class="section-title mb-0 pb-2 font-size-22">Laptops & Computers</h3>

                    <ul class="w-100 w-xl-auto nav nav-pills nav-tab-pill mb-2 pt-3 pt-xl-0 mb-0 border-top border-color-1 border-xl-top-0 align-items-center font-size-15 font-size-15-lg flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble pr-0" id="pills-tab-3" role="tablist">
                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1">
                            <a class="nav-link rounded-pill active" id="Dpills-one-example1-tab" data-toggle="pill" href="#Dpills-one-example1" role="tab" aria-controls="Dpills-one-example1" aria-selected="true">Top 20</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1">
                            <a class="nav-link rounded-pill" id="Dpills-two-example1-tab" data-toggle="pill" href="#Dpills-two-example1" role="tab" aria-controls="Dpills-two-example1" aria-selected="false">Accessories</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1">
                            <a class="nav-link rounded-pill" id="Dpills-three-example1-tab" data-toggle="pill" href="#Dpills-three-example1" role="tab" aria-controls="Dpills-three-example1" aria-selected="false">All in One</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1">
                            <a class="nav-link rounded-pill" id="Dpills-four-example1-tab" data-toggle="pill" href="#Dpills-four-example1" role="tab" aria-controls="Dpills-four-example1" aria-selected="false">Audio Speakers</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1">
                            <a class="nav-link rounded-pill" id="Dpills-five-example1-tab" data-toggle="pill" href="#Dpills-five-example1" role="tab" aria-controls="Dpills-five-example1" aria-selected="false">Cameras</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1">
                            <a class="nav-link rounded-pill" id="Dpills-six-example1-tab" data-toggle="pill" href="#Dpills-six-example1" role="tab" aria-controls="Dpills-six-example1" aria-selected="false">Cameras & Photography</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Nav Pills -->
            <div class="row">
                <div class="col-md-6 col-lg">
                    <a href="../shop/shop.html" class="d-block"><img class="img-fluid" src="frontend/assets/img/390X370/img1.jpg" alt="Image Description"></a>
                </div>
                <div class="col-md-6 pl-md-0 col-lg-8gdot46">
                    <!-- Tab Content -->
                    <div class="tab-content u-slick__tab overflow-hidden pr-0dot5" id="Dpills-tabContent">
                        <div class="tab-pane fade show active" id="Dpills-one-example1" role="tabpanel" aria-labelledby="Dpills-one-example1-tab">
                            <div class="js-slick-carousel u-slick position-static u-slick-overflow-visble pb-7 pt-1 px-1"
                                 data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                                 data-slides-show="5"
                                 data-slides-scroll="1"
                                 data-responsive='[{
                                                  "breakpoint": 1400,
                                                  "settings": {
                                                    "slidesToShow": 4
                                                  }
                                                }, {
                                                    "breakpoint": 1200,
                                                    "settings": {
                                                      "slidesToShow": 3
                                                    }
                                                }, {
                                                  "breakpoint": 992,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 768,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 554,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }]'>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(8)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(33)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img6.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(74)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Dpills-two-example1" role="tabpanel" aria-labelledby="Dpills-two-example1-tab">
                            <div class="js-slick-carousel u-slick position-static u-slick-overflow-visble pb-7 pt-1 px-1"
                                 data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                                 data-slides-show="5"
                                 data-slides-scroll="1"
                                 data-responsive='[{
                                                  "breakpoint": 1400,
                                                  "settings": {
                                                    "slidesToShow": 4
                                                  }
                                                }, {
                                                    "breakpoint": 1200,
                                                    "settings": {
                                                      "slidesToShow": 3
                                                    }
                                                }, {
                                                  "breakpoint": 992,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 768,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 554,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }]'>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(8)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(33)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img6.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(74)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Dpills-three-example1" role="tabpanel" aria-labelledby="Dpills-three-example1-tab">
                            <div class="js-slick-carousel u-slick position-static u-slick-overflow-visble pb-7 pt-1 px-1"
                                 data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                                 data-slides-show="5"
                                 data-slides-scroll="1"
                                 data-responsive='[{
                                                  "breakpoint": 1400,
                                                  "settings": {
                                                    "slidesToShow": 4
                                                  }
                                                }, {
                                                    "breakpoint": 1200,
                                                    "settings": {
                                                      "slidesToShow": 3
                                                    }
                                                }, {
                                                  "breakpoint": 992,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 768,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 554,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }]'>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(8)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(33)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img6.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(74)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Dpills-four-example1" role="tabpanel" aria-labelledby="Dpills-four-example1-tab">
                            <div class="js-slick-carousel u-slick position-static u-slick-overflow-visble pb-7 pt-1 px-1"
                                 data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                                 data-slides-show="5"
                                 data-slides-scroll="1"
                                 data-responsive='[{
                                                  "breakpoint": 1400,
                                                  "settings": {
                                                    "slidesToShow": 4
                                                  }
                                                }, {
                                                    "breakpoint": 1200,
                                                    "settings": {
                                                      "slidesToShow": 3
                                                    }
                                                }, {
                                                  "breakpoint": 992,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 768,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 554,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }]'>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(8)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(33)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img6.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(74)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Dpills-five-example1" role="tabpanel" aria-labelledby="Dpills-five-example1-tab">
                            <div class="js-slick-carousel u-slick position-static u-slick-overflow-visble pb-7 pt-1 px-1"
                                 data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                                 data-slides-show="5"
                                 data-slides-scroll="1"
                                 data-responsive='[{
                                                  "breakpoint": 1400,
                                                  "settings": {
                                                    "slidesToShow": 4
                                                  }
                                                }, {
                                                    "breakpoint": 1200,
                                                    "settings": {
                                                      "slidesToShow": 3
                                                    }
                                                }, {
                                                  "breakpoint": 992,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 768,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 554,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }]'>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(8)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(33)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img6.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(74)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Dpills-six-example1" role="tabpanel" aria-labelledby="Dpills-six-example1-tab">
                            <div class="js-slick-carousel u-slick position-static u-slick-overflow-visble pb-7 pt-1 px-1"
                                 data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                                 data-slides-show="5"
                                 data-slides-scroll="1"
                                 data-responsive='[{
                                                  "breakpoint": 1400,
                                                  "settings": {
                                                    "slidesToShow": 4
                                                  }
                                                }, {
                                                    "breakpoint": 1200,
                                                    "settings": {
                                                      "slidesToShow": 3
                                                    }
                                                }, {
                                                  "breakpoint": 992,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 768,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }, {
                                                  "breakpoint": 554,
                                                  "settings": {
                                                    "slidesToShow": 2
                                                  }
                                                }]'>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(8)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(33)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img6.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(14)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(88)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide products-group">
                                    <div class="product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="frontend/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(74)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    </ul>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

