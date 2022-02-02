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

        <form action="" method="POST">
            @csrf()
            <div class="row">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
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
                                        <td>Ücretsiz Kargo</td>
                                    </tr>
                                    <tr>
                                        <th>Toplam</th>
                                        <td><strong>{{money(Cart::total())}}₺</strong></td>
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
                                                    Siparişinizi ödemesini kapıda kredi veya nakit olarak kolayca ve güvenli bir şekilde yapabilirsiniz.
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between px-3 mb-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck10" required
                                               data-msg="Please agree terms and conditions."
                                               data-error-class="u-has-error"
                                               data-success-class="u-has-success">
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

                <div class="col-lg-7 order-lg-1">
                    <div class="pb-7 mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title mb-0 pb-2 font-size-25">İletişim Bilgileri</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Adınız
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control"
                                           name="firstName" placeholder="Adınız"
                                            autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Soyadınız
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control"
                                           name="firstName" placeholder="Soyadınız"
                                           autocomplete="off">
                                </div>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-6">
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Email Adresiniz
                                    </label>
                                    <input type="email" class="form-control" name="emailAddress" placeholder="Email. Zorunlu Değildir">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Telefon Numaranız   <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Telefon Numaranız">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                       Açık Adresiniz   <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="text" placeholder="Açık Adresinizi Yazınız"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Sipariş Notu
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="text" placeholder=" Varsa Sipariş ile ilgili notunuz"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
