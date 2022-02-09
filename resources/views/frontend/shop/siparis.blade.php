@extends('frontend.layout.app')
@section('title', 'Siparişi Tamamla |  Kıblegah Aile Oyunları Online Satış Sitesi')
@section('content')

    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Siparişi Tamamla</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">

        <form action="{{ route('kaydet') }}" method="POST">
            @csrf()
            <div class="row">
                <div class="col-lg-7">
                    <div class="pb-2 mb-2">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title mb-0 pb-2 font-size-25">İletişim <b>Bilgileri</b></h3>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="js-form-message mb-3">
                                    <label class="form-label">
                                        Adınız
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input value="{{old('name')}}" type="text" class="form-control  @if($errors->has('name')) is-invalid @endif" name="name" placeholder="Adınız" autocomplete="off">
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">{{$errors->first('name')}}</div>
                                    @endif

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="js-form-message mb-3">
                                    <label class="form-label">
                                        Soyadınız
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input value="{{old('surname')}}" type="text" class="form-control @if($errors->has('surname')) is-invalid @endif" name="surname" placeholder="Soyadınız" autocomplete="off">
                                    @if($errors->has('surname'))
                                        <div class="invalid-feedback">{{$errors->first('surname')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="js-form-message mb-3">
                                    <label class="form-label">
                                        Email Adresiniz
                                    </label>
                                    <input value="{{old('email')}}" type="text" class="form-control @if($errors->has('email')) is-invalid @endif"  name="email" placeholder="Email. Zorunlu Değildir">
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">{{$errors->first('email')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="js-form-message mb-3">
                                    <label class="form-label">
                                        Telefon Numaranız <span class="text-danger">*</span>
                                    </label>
                                    <input value="{{old('phone')}}" type="text" class="form-control @if($errors->has('phone')) is-invalid @endif" name="phone" placeholder="Telefon Numaranız">
                                    @if($errors->has('phone'))
                                        <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="js-form-message mb-3">
                                    <label class="form-label">
                                       Açık Adresiniz<span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5 @if($errors->has('address')) is-invalid @endif" rows="4" name="address" placeholder="Açık Adresinizi Yazınız">{{old('address')}}</textarea>
                                        @if($errors->has('address'))
                                            <div class="invalid-feedback">{{$errors->first('address')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        İl
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control @if($errors->has('province')) is-invalid @endif  js-select selectpicker dropdown-select" data-live-search="true" data-style="form-control border-color-1 font-weight-normal">
                                        <option value="">İl Seçiniz</option>
                                        <option value="İstanbul">İstanbul</option>
                                        <option value="Ankara">Ankara</option>
                                        <option value="İzmir">İzmir</option>
                                        <option value="Adana">Adana</option>
                                        <option value="Adıyaman">Adıyaman</option>
                                        <option value="Afyonkarahisar">Afyonkarahisar</option>
                                        <option value="Ağrı">Ağrı</option>
                                        <option value="Amasya">Amasya</option>
                                        <option value="Antalya">Antalya</option>
                                        <option value="Artvin">Artvin</option>
                                        <option value="Aydın">Aydın</option>
                                        <option value="Balıkesir">Balıkesir</option>
                                        <option value="Bilecik">Bilecik</option>
                                        <option value="Bingöl">Bingöl</option>
                                        <option value="Bitlis">Bitlis</option>
                                        <option value="Bolu">Bolu</option>
                                        <option value="Burdur">Burdur</option>
                                        <option value="Bursa">Bursa</option>
                                        <option value="Çanakkale">Çanakkale</option>
                                        <option value="Çankırı">Çankırı</option>
                                        <option value="Çorum">Çorum</option>
                                        <option value="Denizli">Denizli</option>
                                        <option value="Diyarbakır">Diyarbakır</option>
                                        <option value="Edirne">Edirne</option>
                                        <option value="Elazığ">Elazığ</option>
                                        <option value="Erzincan">Erzincan</option>
                                        <option value="Erzurum">Erzurum</option>
                                        <option value="Eskişehir">Eskişehir</option>
                                        <option value="Gaziantep">Gaziantep</option>
                                        <option value="Giresun">Giresun</option>
                                        <option value="Gümüşhane">Gümüşhane</option>
                                        <option value="Hakkari">Hakkari</option>
                                        <option value="Hatay">Hatay</option>
                                        <option value="Isparta">Isparta</option>
                                        <option value="Mersin">Mersin</option>
                                        <option value="Kars">Kars</option>
                                        <option value="Kastamonu">Kastamonu</option>
                                        <option value="Kayseri">Kayseri</option>
                                        <option value="Kırklareli">Kırklareli</option>
                                        <option value="Kırşehir">Kırşehir</option>
                                        <option value="Kocaeli">Kocaeli</option>
                                        <option value="Konya">Konya</option>
                                        <option value="Kütahya">Kütahya</option>
                                        <option value="Malatya">Malatya</option>
                                        <option value="Manisa">Manisa</option>
                                        <option value="Kahramanmaraş">Kahramanmaraş</option>
                                        <option value="Mardin">Mardin</option>
                                        <option value="Muğla">Muğla</option>
                                        <option value="Muş">Muş</option>
                                        <option value="Nevşehir">Nevşehir</option>
                                        <option value="Niğde">Niğde</option>
                                        <option value="Ordu">Ordu</option>
                                        <option value="Rize">Rize</option>
                                        <option value="Sakarya">Sakarya</option>
                                        <option value="Samsun">Samsun</option>
                                        <option value="Siirt">Siirt</option>
                                        <option value="Sinop">Sinop</option>
                                        <option value="Sivas">Sivas</option>
                                        <option value="Tekirdağ">Tekirdağ</option>
                                        <option value="Tokat">Tokat</option>
                                        <option value="Trabzon">Trabzon</option>
                                        <option value="Tunceli">Tunceli</option>
                                        <option value="Şanlıurfa">Şanlıurfa</option>
                                        <option value="Uşak">Uşak</option>
                                        <option value="Van">Van</option>
                                        <option value="Yozgat">Yozgat</option>
                                        <option value="Zonguldak">Zonguldak</option>
                                        <option value="Aksaray">Aksaray</option>
                                        <option value="Bayburt">Bayburt</option>
                                        <option value="Karaman">Karaman</option>
                                        <option value="Kırıkkale">Kırıkkale</option>
                                        <option value="Batman">Batman</option>
                                        <option value="Şırnak">Şırnak</option>
                                        <option value="Bartın">Bartın</option>
                                        <option value="Ardahan">Ardahan</option>
                                        <option value="Iğdır">Iğdır</option>
                                        <option value="Yalova">Yalova</option>
                                        <option value="Karabük">Karabük</option>
                                        <option value="Kilis">Kilis</option>
                                        <option value="Osmaniye">Osmaniye</option>
                                        <option value="Düzce">Düzce</option>
                                    </select>
                                    @if($errors->has('province'))
                                        <div class="invalid-feedback">{{$errors->first('province')}}</div>
                                    @endif
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="js-form-message mb-3">
                                    <label class="form-label">
                                        İlçe <span class="text-danger">*</span>
                                    </label>
                                    <input value="{{old('city')}}" type="text" class="form-control @if($errors->has('city')) is-invalid @endif"  name="city" placeholder="İlçe">
                                    @if($errors->has('city'))
                                        <div class="invalid-feedback">{{$errors->first('city')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="js-form-message mb-3">
                                    <label class="form-label">
                                        Sipariş Notu
                                    </label>
                                    <div class="input-group">
                                        <textarea  class="form-control p-5" rows="4" name="note" placeholder=" Varsa Sipariş ile ilgili notunuz"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-5 mb-7 mb-lg-0">
                    <div class="pl-lg-3 ">
                        <div class="bg-gray-1 rounded-lg">
                            <div class="p-4 mb-4 checkout-table">
                                <div class="border-bottom border-color-1 mb-5">
                                    <h3 class="section-title mb-0 pb-2 font-size-25">Sepetiniz</h3>
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Ürün Adı</th>
                                        <th class="product-total">Fiyatı</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Cart::content() as $cart)
                                        <tr class="cart_item">
                                            <td>{{ $cart->name }} <strong class="product-quantity">× {{ $cart->qty }}</strong></td>
                                            <td>{{ money($cart->qty *  $cart->price)  }}₺</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Ara Toplam</th>
                                        <td>{{money(Cart::subtotal())}}₺</td>
                                    </tr>
                                    <tr>
                                        <th>Kargo</th>
                                        <td>{{ cargo(Cart::total()) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Toplam</th>
                                        <td><strong>{{cargoToplam(Cart::total())}}₺</strong></td>
                                    </tr>
                                    </tfoot>
                                </table>

                                <div class="border-top border-width-3 border-color-1 pt-3 mb-3">
                                    <div id="basicsAccordion1">
                                        <div class="border-bottom border-color-1 border-dotted-bottom">
                                            <div class="p-3" id="basicsHeadingOne">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="stylishRadio1" name="stylishRadio" checked>
                                                    <label class="custom-control-label form-label" for="stylishRadio1"
                                                           data-toggle="collapse"
                                                           data-target="#basicsCollapseOnee"
                                                           aria-expanded="true"
                                                           aria-controls="basicsCollapseOnee">
                                                        Kapıda Ödeme
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="basicsCollapseOnee" class="collapse show border-top border-color-1 border-dotted-top bg-dark-lighter"
                                                 aria-labelledby="basicsHeadingOne"
                                                 data-parent="#basicsAccordion1">
                                                <div class="p-4">
                                                    Siparişinizi ödemesini kapıda nakit olarak kolayca ve güvenli bir şekilde yapabilirsiniz.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between px-3 mb-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" checked required>
                                        <label class="form-check-label form-label" for="defaultCheck10">
                                            Kullanıcı Sözleşmesini okudum <a href="#" class="text-blue">onaylıyorum </a>
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary-dark-w btn-block btn-pill font-size-20 mb-3 py-3">Siparişi Tamamla</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

@endsection
