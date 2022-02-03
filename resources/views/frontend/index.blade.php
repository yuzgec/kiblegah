@extends('frontend.layout.app')
@section('content')
    @include('backend.layout.alert')

    @include('frontend.layout.slider')
    <div class="container">
        <div class="mb-5">
            <div class="row">
                @include('frontend.layout.kampanya')
                <div class="col">
                     <ul class="row list-unstyled products-group no-gutters">
                        @foreach($Products->take(6) as $item)
                            <li class="col-6 col-md-4 product-item ">
                                <div class="js-slide products-group">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3 border border-width-1 border-purple borders-radius-5">
                                            <div class="product-item__body pb-xl-2">
                                                <h5 class="mb-1 product-item__title">
                                                    <a href="{{ route('urun', $item->slug) }}" class="text-gray-60  font-weight-bold" title="{{ $item->title }}"> {{ $item->title }}</a>
                                                </h5>
                                                <div class="mb-2">
                                                    <a href="{{ route('urun', $item->slug) }}" class="d-block text-center" title="{{ $item->title }}">
                                                        <img class="img-fluid" src="{{ (!$item->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $item->getFirstMediaUrl('page', 'thumb')}}" alt="{{ $item->title }}">
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
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a  class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Süper Hızlı Gönderi</a>
                                                    <a  class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Ücretsiz Kargo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mb-4">
            <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                <h3 class="section-title section-title__full mb-0 pb-2 font-size-22"><b>EN ÇOK</b> SATILAN ÜRÜNLER</h3>
                <a class="d-block text-gray-16" href="{{ route('home') }}">Hepsini Gör <i class="ec ec-arrow-right-categproes"></i></a>
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
                @foreach($Products->whereNotNull('bestselling') as $item)
                <div class="js-slide products-group">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3 border border-width-1 border-purple borders-radius-5"">
                            <div class="product-item__body pb-xl-2">
                                <h5 class="mb-1 product-item__title">
                                    <a href="{{ route('urun', $item->slug) }}" class="text-gray-60   font-weight-bold" title="{{ $item->title }}"> {{ $item->title }}</a>
                                </h5>
                                <div class="mb-2">
                                    <a href="{{ route('urun', $item->slug) }}" class="d-block text-center" title="{{ $item->title }}">
                                        <img class="img-fluid" src="{{ (!$item->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $item->getFirstMediaUrl('page', 'thumb')}}" alt="{{ $item->title }}">
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

        <div class="mb-8">
            <a href="{{ route('home')}}" class="d-block text-gray-90">
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

        <div class="mb-6">
            <div class="position-relative text-center z-index-2">
                <div class="d-flex justify-content-between border-bottom border-color-1 flex-xl-nowrap flex-wrap border-md-down-top-0 border-lg-down-bottom-0 mb-3">
                    <h3 class="section-title mb-0 pb-2 font-size-22"><b>KIBLEGAH</b>.COM.TR</h3>
                </div>
            </div>
            <!-- End Nav Pills -->
            <div class="row">
                <div class="col-md-6 col-lg">
                    <a href="{{ route('home')}}" class="d-block"><img class="img-fluid" src="frontend/assets/img/Logolar.png" alt="Image Description"></a>
                </div>
                <div class="col-md-6 pl-md-0 col-lg-8gdot46">
                    <div class="tab-content u-slick__tab overflow-hidden pr-0dot5" id="Dpills-tabContent">
                        <div class="tab-pane fade show active" id="Dpills-one-example1" role="tabpanel" aria-labelledby="Dpills-one-example1-tab">
                            <div class="js-slick-carousel u-slick position-static u-slick-overflow-visble pb-7 pt-1 px-1"
                                 data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                                 data-slides-show="4"
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
                                @foreach($Products->take(10, 20) as $item)
                                    <div class="js-slide products-group">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3 border border-width-1 border-purple borders-radius-5"">
                                                <div class="product-item__body pb-xl-2">
                                                    <h5 class="mb-1 product-item__title">
                                                        <a href="{{ route('urun', $item->slug) }}" class="text-gray-60 font-weight-bold" title="{{ $item->title }}"> {{ $item->title }}</a>
                                                    </h5>
                                                    <div class="mb-2">
                                                        <a href="{{ route('urun', $item->slug) }}" class="d-block text-center" title="{{ $item->title }}">
                                                            <img class="img-fluid" src="{{ (!$item->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $item->getFirstMediaUrl('page', 'thumb')}}" alt="{{ $item->title }}">
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
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

