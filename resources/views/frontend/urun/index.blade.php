@extends('frontend.layout.app')
@section('title2', $Detay->title. '| Kıblegah Aile Oyunları Online Satış Sitesi')
@section('content')
    @include('backend.layout.alert')
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">

            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{ $Detay->title }}</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="mb-xl-14 mb-6">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-5 mb-4 mb-md-0">
                    <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                         data-infinite="true"
                         data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                         data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                         data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                         data-nav-for="#sliderSyncingThumb">
                        <div class="js-slide">
                            <img src="{{ (!$Detay->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $Detay->getFirstMediaUrl('page')}}"  class="img-fluid" alt="{{ $Detay->title }}">
                        </div>
                        @foreach($Detay->getMedia('gallery') as $item)
                            <div class="js-slide">
                                <img src="{{ $item->getUrl() }}"  class="img-fluid" alt="{{ $Detay->title }}">
                            </div>
                        @endforeach
                    </div>

                    <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                         data-infinite="true"
                         data-slides-show="5"
                         data-is-thumbs="true"
                         data-nav-for="#sliderSyncingNav">
                        <div class="js-slide" style="cursor: pointer;">
                            <img src="{{ (!$Detay->getFirstMediaUrl('page', 'small')) ? '/backend/resimyok.jpg': $Detay->getFirstMediaUrl('page','small')}}"  class="img-fluid" alt="{{ $Detay->title }}">
                        </div>
                        @foreach($Detay->getMedia('gallery') as $item)
                            <div class="js-slide" style="cursor: pointer;">
                                <img src="{{ $item->getUrl('small') }}"  class="img-fluid" alt="{{ $Detay->title }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 mb-md-6 mb-lg-0">
                    <div class="mb-2">
                        <div class="border-bottom mb-3 pb-md-1 pb-3">
                            <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">Kategori Adı</a>
                            <h2 class="font-size-25 text-lh-1dot2">{{ $Detay->title }}</h2>
                            <div class="mb-2">
                                <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                    <div class="text-warning mr-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <span class="text-secondary font-size-13">(3) Müşteri Yorumları</span>
                                </a>
                            </div>
                            <div class="d-md-flex align-items-center">
                                <a href="#" class="max-width-150 ml-n2 mb-2 mb-md-0 d-block">
                                    <img class="img-fluid" src="https://kiblegahaileoyunlari.com.tr/assets/images/logo1.png" alt="{{ $Detay->title }}">
                                </a>
                            </div>
                        </div>
                        <div class="flex-horizontal-center flex-wrap mb-4">
                            <a href="#" class="text-gray-6 font-size-13 mr-2"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                            <a href="#" class="text-gray-6 font-size-13 ml-2"><i class="ec ec-compare mr-1 font-size-15"></i> Tavsiye Et</a>
                        </div>
                        <div class="mb-2">
                            <ul class="font-size-14 pl-3 ml-1 text-gray-110">
                                {!! $Detay->short !!}
                            </ul>
                        </div>
                        <p><strong>SKU</strong>: {{ $Detay->sku }}</p>

                    </div>
                </div>
                <div class="mx-md-auto mx-lg-0 col-md-6 col-lg-4 col-xl-3">
                    <div class="mb-2">
                        <div class="card p-5 border-width-2 border-color-1 borders-radius-17">
                            <div class="text-gray-9 font-size-14 pb-2 border-color-1 border-bottom mb-3">
                                Stok Durmu: <span class="text-green font-weight-bold">Stokta Mevcut</span></div>
                            <div class="mb-3">
                                <div class="font-size-36 font-weight-bold">{{ money($Detay->price) }}₺ - <del class="font-size-20">{{ money($Detay->old_price) }}₺</del></div>
                            </div>
                            <form action="{{ route('sepeteekle') }}" method="POST">
                            <div class="mb-3">
                                <h6 class="font-size-14">Adet</h6>
                                <!-- Quantity -->
                                <div class="border rounded-pill py-1 w-md-60 height-35 px-3 border-color-1">
                                    <div class="js-quantity row align-items-center">
                                        <div class="col">
                                            <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" name="qty" type="text" value="1">
                                        </div>
                                        <div class="col-auto pr-1">
                                            <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                <small class="fas fa-minus btn-icon__inner"></small>
                                            </a>
                                            <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                <small class="fas fa-plus btn-icon__inner"></small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 pb-0dot5">

                                    @csrf
                                    <input type="hidden" name="id" value="{{ $Detay->id }}">
                                    <button type="submit" class="btn btn-block btn-primary-dark">
                                        <i class="ec ec-add-to-cart mr-2 font-size-20"></i> Sepete Ekle
                                    </button>

                            </div>
                            </form>
                            <div class="mb-3">
                                <a href="#" class="btn btn-block btn-green"><i class="fab fa-whatsapp"></i> Whatsapp Sipariş</a>
                            </div>
                            <p><i class="fa fa-eye"></i> Bu ürüne bugun <b>({{$Count}})</b> kişi baktı<br>
                                <i class="ec ec-transport mr-1"></i> Aynı gün kargoda
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mb-8">
            <div class="position-relative position-md-static px-md-6">
                <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0" id="pills-tab-8" role="tablist">
                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                        <a class="nav-link active" id="Jpills-one-example1-tab" data-toggle="pill"
                           href="#Jpills-one-example1" role="tab" aria-controls="Jpills-one-example1" aria-selected="true">Açıklama</a>
                    </li>
                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                        <a class="nav-link" id="Jpills-two-example1-tab" data-toggle="pill"
                           href="#Jpills-two-example1" role="tab" aria-controls="Jpills-two-example1" aria-selected="false">Özellikleri</a>
                    </li>
                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                        <a class="nav-link" id="Jpills-four-example1-tab" data-toggle="pill"
                           href="#Jpills-four-example1" role="tab" aria-controls="Jpills-four-example1" aria-selected="false">Yorumlar</a>
                    </li>
                </ul>
            </div>

            <div class="borders-radius-17 border p-4 mt-4 mt-md-0 px-lg-10 py-lg-9">
                <div class="tab-content" id="Jpills-tabContent">
                    <div class="tab-pane fade active show" id="Jpills-one-example1" role="tabpanel" aria-labelledby="Jpills-one-example1-tab">
                        {!! $Detay->desc !!}
                    </div>
                    <div class="tab-pane fade" id="Jpills-two-example1" role="tabpanel" aria-labelledby="Jpills-two-example1-tab">
                        <h3 class="font-size-24 mb-3">Özellikleri</h3>
                        {{ $Detay->featrues }}

                    </div>
                    <div class="tab-pane fade" id="Jpills-four-example1" role="tabpanel" aria-labelledby="Jpills-four-example1-tab">
                        <div class="row mb-8">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h3 class="font-size-18 mb-6">Ürün için toplam <b>(3)</b> yorum vardır </h3>
                                    <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">4.3</h2>
                                    <div class="text-lh-1">overall</div>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-gray-90">205</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h3 class="font-size-18 mb-5">Yorum Ekle</h3>
                                <form class="js-validate">
                                    <div class="row align-items-center mb-4">
                                        <div class="col-md-4 col-lg-3">
                                            <label for="rating" class="form-label mb-0">Puanınız</label>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <a href="#" class="d-block">
                                                <div class="text-warning text-ls-n2 font-size-16">
                                                    <small class="far fa-star text-muted"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="js-form-message form-group mb-3 row">
                                        <div class="col-md-4 col-lg-3">
                                            <label for="descriptionTextarea" class="form-label">Yorumunuz</label>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea class="form-control" rows="3" data-success-class="u-has-success"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="offset-md-4 offset-lg-3 col-auto">
                                            <button type="submit" class="btn btn-primary-dark btn-wide transition-3d-hover">Yorumu Ekleyin</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="border-bottom border-color-1 pb-4 mb-4">
                            <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                </div>
                            </div>
                            <p class="text-gray-90">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>
                            <div class="mb-2">
                                <strong>John Doe</strong>
                                <span class="font-size-13 text-gray-23">- April 3, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
