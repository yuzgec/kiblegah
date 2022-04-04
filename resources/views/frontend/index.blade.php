@extends('frontend.layout.app')
@section('content')
    @include('backend.layout.alert')

    @include('frontend.layout.slider')
    <div class="container">
        <div class="mb-5">
            <div class="row">
                <div class="col">
                    <ul class="row list-unstyled products-group no-gutters">
                        @foreach($Product->take(6) as $item)
                            <li class="col-6 col-md-4 product-item p-1">
                                <div class="js-slide products-group">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3 border border-width-1 border-purple borders-radius-5">
                                            <div class="product-item__body pb-xl-2">
                                                <h5 class="mb-1 product-item__title">
                                                    <a href="{{ ($item->external == null) ? route('urun', $item->slug) : route('kiblegahkampanya')}}" class="text-gray-60  font-weight-bold" title="{{ $item->title }}"> {{ $item->title }}</a>
                                                </h5>
                                                <div class="mb-2">
                                                    <a href="{{ ($item->external == null) ? route('urun', $item->slug) : route('kiblegahkampanya')}}" class="d-block text-center" title="{{ $item->title }}">
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
                @include('frontend.layout.kampanya')

            </div>
        </div>
    </div>
    <div class="container">
        <div class="mb-5">
            <div class="row">
                <div class="col">
                    <ul class="row list-unstyled products-group no-gutters">
                        @foreach($Product->slice(6) as $item)
                            <li class="col-6 col-md-3 product-item p-1">
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


@endsection

