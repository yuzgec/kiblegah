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

    <div class="container ">
        <div class="mb-xl-5 mb-2">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-xl-4 mb-4 mb-md-0">
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
                    <div id="sliderSyncingThumb"
                         class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                         data-infinite="true"
                         data-slides-show="3"
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
                <div class="col-md-6 col-lg-5 col-xl-5 mb-md-6 mb-lg-0">
                    <div class="mb-2">
                        <div class="border-bottom mb-3 pb-md-1 pb-3">
                            <h2 class="font-size-25 text-lh-1dot2">{{ $Detay->title }}</h2>
                            <div class="mb-2">
                                <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                    <div class="text-warning mr-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star"></small>
                                    </div>
                                    <span class="text-secondary font-size-12">({{ $Detay->getComment()->count() }}) Müşteri Yorumları</span>
                                    <span class="text-gray-9 ml-3 font-size-12"><strong>SKU</strong>: {{ $Detay->sku }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="mb-2">
                            <ul class="font-size-14 pl-3 ml-1 text-gray-110">
                                {!! $Detay->short !!}
                            </ul>
                        </div>
                        @foreach($Comments->take(1) as $comment)
                        <div class="pb-1">
                            <div class="card p-2 border-width-2 border-color-1 borders-radius-17">
                                <span class="text-gray-90 mb-2">{{ $comment->comment }}</span>
                                <div class="d-flex justify-content-between">
                                    <strong>{{ isim($comment->name) }}</strong>
                                    <span class="font-size-14 text-gray-10"><i class="far fa-clock"></i> {{ $comment->created_at->diffForHumans() }}</span>
                                    <div class="d-flex justify-content-between align-items-center text-secondary font-size-12">
                                        <div class="text-warning text-ls-n2 font-size-16" style="width: 100px;">
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($loop->last)
                            <a class="btn btn-purple btn-block nav-link"
                               href="#Yorumlar">
                                Hepsini Gör
                            </a>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="mx-md-auto mx-lg-0 col-md-6 col-lg-4 col-xl-3">
                    <div class="mb-2">
                        <div class="card p-4 border-width-2 border-color-1 borders-radius-17">
                            <div class="text-gray-9 font-size-14 pb-2 border-color-1 border-bottom mb-3">
                                Stok Durumu: <span class="text-green font-weight-bold">Stokta Mevcut</span></div>
                            <div class="mb-3">
                                <div class="font-size-28 font-weight-bold">{{ money($Detay->price) }}₺ -
                                    <del class="font-size-20">{{ money($Detay->old_price) }}₺</del>
                                </div>
                                @if ($Detay->campagin_price > 0)
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="font-size-20 badge badge-success p-2">
                                        @if (Cart::total() > CARGO_LIMIT )
                                            @if ($Detay->campagin_price != null)
                                                {{ money($Detay->campagin_price) }}₺
                                            @endif
                                        @endif
                                    </div>

                                    <div class="ml-2">
                                        <span >Sepetiniz {{ CARGO_LIMIT }}₺'dan fazla olduğu için extra indirimli olarak satın alabilirsiniz.</span>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <form action="{{ route('sepeteekle') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <h6 class="font-size-14">Adet</h6>
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
                                <input type="hidden" name="id" value="{{ $Detay->id }}">
                                <button type="submit" class="btn btn-block btn-primary-dark">
                                    <i class="ec ec-add-to-cart mr-2 font-size-20"></i> Sepete Ekle
                                </button>
                            </div>
                            </form>
                            <div class="mb-3">
                                <a href="#" class="btn btn-block btn-green"><i class="fab fa-whatsapp"></i> Whatsapp Sipariş</a>
                            </div>
                            <span>
                                <i class="fa fa-eye"></i> Bugün <b>({{$Count}})</b> kişi baktı<br>
                                <i class="ec ec-transport mr-1"></i> Aynı gün kargoda<br>
                                <i class="ec ec-payment mr-1"></i> Kapıda Güvenli Ödeme
                            </span>

                            @foreach(Cart::content() as $c)
                                @if($c->id == $Detay->id)
                                    <div class="alert alert-primary mb-0 font-size-14"><b>{{ $Detay->title }}</b> adlı ürün <a href="{{ route('sepet') }}" class="text-black">sepetinizde</a> mevcut</div>
                                @endif
                            @endforeach

                            @if(@auth()->user()->is_admin == 1)
                                <a href="{{ route('product.edit', $Detay->id) }}" target="_blank" class="btn btn-secondary text-white mt-2">Ürün Düzenle</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="pt-6 pb-3 mb-6 bg-gray-7">
            <div class="container">
                <div class="js-scroll-nav">
                    <div class="bg-white pt-4 pb-6 px-xl-11 px-md-5 px-4 mb-6">
                        <div id="Accessories" class="mx-md-2">
                            <div class="position-relative mb-6">
                                <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">

                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link active" href="#Aciklama">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Ürün Açıklaması
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link" href="#Yorumlar">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Yorumlar
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mx-md-2 pt-1">
                                <div class="row ">
                                    <div class="col mb-6 mb-md-0">
                                        {!! $Detay->desc !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="bg-white py-4 px-xl-11 px-md-5 px-4 mb-6">
                        <div id="Yorumlar" class="mx-md-2">
                            <div class="row g-3 mb-8">
                                @foreach($Comments as $comment)
                                    <div class="col-md-6 col-12 p-1">
                                        <div class="card p-2 border-width-2 border-color-1 borders-radius-17">
                                            <span class="text-gray-90 mb-2">{{ $comment->comment }}</span>
                                            <div class="d-flex justify-content-between">
                                                <strong>{{ isim($comment->name) }}</strong>
                                                <span class="font-size-14 text-gray-10"><i class="far fa-clock"></i> {{ $comment->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center text-center">
                                    {{ $Comments->appends(['sirala' => 'yorum'])->links() }}
                                </div>
                            </div>
                            <div class="row mb-8">
                                <div class="col-md-12">
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
                                                <button type="submit" class="btn btn-primary-dark btn-wide transition-3d-hover" disabled>Yorumu Ekleyin</button>
                                                <p class="font-size-12">*Yorum yazmak için ürünü satın almanız gerekmektedir.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

@endsection
