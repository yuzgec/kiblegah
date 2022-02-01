@extends('frontend.layout.app')
@section('title', $Detay->title.' | Kıblegah Aile Oyunları Online Satış Sitesi')
@section('content')

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
        <div class="row mb-8">
            <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                    <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                        <li><div class="dropdown-title">ÜRÜN <b>KATEGORİLERİ</b></div></li>
                        @foreach($Product_Categories as $item)
                            <a class="ml-2 p-2" href=""><i class="fa fa-angle-right"></i> {{ $item->title }}<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                        @endforeach
                    </ul>
                </div>

                <div class="mb-8">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">En Çok Satılan Ürünler</h3>
                    </div>
                    <ul class="list-unstyled">

                        <li class="mb-4">
                            <div class="row">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75">
                                        <img class="img-fluid" src="/frontend/assets/img/300X300/img1.jpg" alt="Image Description">
                                    </a>
                                </div>
                                <div class="col">
                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="../shop/single-product-fullwidth.html">Notebook Black Spire V Nitro VN7-591G</a></h3>
                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <div class="font-weight-bold">
                                        <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                        <ins class="font-size-15 text-red text-decoration-none d-block">$1999.00</ins>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-wd-9gdot5">
                <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
                    <div class="d-xl-none">

                        <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button"
                           aria-controls="sidebarContent1"
                           aria-haspopup="true"
                           aria-expanded="false"
                           data-unfold-event="click"
                           data-unfold-hide-on-scroll="false"
                           data-unfold-target="#sidebarContent1"
                           data-unfold-type="css-animation"
                           data-unfold-animation-in="fadeInLeft"
                           data-unfold-animation-out="fadeOutLeft"
                           data-unfold-duration="500">
                            <i class="fas fa-sliders-h"></i> <span class="ml-1">Filtrele</span>
                        </a>

                    </div>

                    <div class="px-3 d-none d-xl-block">
                        <p class="font-size-14 text-gray-90 mb-0"><b>55</b> adet ürün listelendi</p>
                    </div>
                    <div class="d-flex">
                        <form method="get">
                            <select class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0"
                                    data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                <option value="" selected>Sıralama</option>
                                <option value="two">Artan Fiyata Göre Sırala</option>
                                <option value="three">Azalan Fiyata Göre Sırala</option>
                                <option value="four">Son Ekleme Tarihine Göre Sırala</option>
                            </select>
                        </form>
                        <form method="POST" class="ml-2 d-none d-xl-block">
                            <!-- Select -->
                            <select class="js-select selectpicker dropdown-select max-width-200"
                                    data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                <option value="one" selected>20 Ürün Göster</option>
                                <option value="two">40 Ürün Göster</option>
                                <option value="three">Hepsini Göster</option>
                            </select>
                        </form>
                    </div>
                    <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
                        <form method="post" class="min-width-50 mr-1">
                            <input size="2" min="1" max="3" step="1" type="number" class="form-control text-center px-2 height-35" value="1">
                        </form> Toplam 3 sayfa
                        <a class="text-gray-30 font-size-20 ml-2" href="#">→</a>
                    </nav>
                </div>


                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                        <ul class="row list-unstyled products-group no-gutters">

                            <x-product-list></x-product-list>

                        </ul>
                    </div>
                 </div>

            </div>
        </div>

    </div>


    <aside id="sidebarContent1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarNavToggler1">
        <div class="u-sidebar__scroller">
            <div class="u-sidebar__container">
                <div class="">

                    <div class="d-flex align-items-center pt-3 px-4 bg-white">
                        <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent1"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent1"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInLeft"
                                data-unfold-animation-out="fadeOutLeft"
                                data-unfold-duration="500">
                            <span aria-hidden="true"><i class="ec ec-close-remove"></i></span>
                        </button>
                    </div>

                    <div class="js-scrollbar u-sidebar__body">
                        <div class="u-sidebar__content u-header-sidebar__content px-4">
                            <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                                <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                                    <li><div class="dropdown-title">ÜRÜN <b>KATEGORİLERİ</b></div></li>
                                    @foreach($Product_Categories as $item)
                                        <a class="ml-2 p-2" href=""> {{ $item->title }}<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="mb-6">
                                <div class="border-bottom border-color-1 mb-5">
                                    <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">En Çok Satılanlar</h3>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="mb-4">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block width-75">
                                                    <img class="img-fluid" src="../../assets/img/300X300/img1.jpg" alt="Image Description">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="../shop/single-product-fullwidth.html">Notebook Black Spire V Nitro VN7-591G</a></h3>
                                                <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                </div>
                                                <div class="font-weight-bold">
                                                    <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                                    <ins class="font-size-15 text-red text-decoration-none d-block">$1999.00</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
@endsection
