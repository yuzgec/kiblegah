@extends('frontend.layout.app')
@section('customCSS')
    <style>

        .animation-ctn{
            text-align:center;
            margin-top:25px;
        }

        @-webkit-keyframes checkmark {
            0% {
                stroke-dashoffset: 100px
            }

            100% {
                stroke-dashoffset: 200px
            }
        }

        @-ms-keyframes checkmark {
            0% {
                stroke-dashoffset: 100px
            }

            100% {
                stroke-dashoffset: 200px
            }
        }

        @keyframes checkmark {
            0% {
                stroke-dashoffset: 100px
            }

            100% {
                stroke-dashoffset: 0px
            }
        }

        @-webkit-keyframes checkmark-circle {
            0% {
                stroke-dashoffset: 480px

            }

            100% {
                stroke-dashoffset: 960px;

            }
        }

        @-ms-keyframes checkmark-circle {
            0% {
                stroke-dashoffset: 240px
            }

            100% {
                stroke-dashoffset: 480px
            }
        }

        @keyframes checkmark-circle {
            0% {
                stroke-dashoffset: 480px
            }

            100% {
                stroke-dashoffset: 960px
            }
        }

        @keyframes colored-circle {
            0% {
                opacity:0
            }

            100% {
                opacity:100
            }
        }

        .inlinesvg .svg svg {
            display: inline
        }


        .icon--order-success svg polyline {
            -webkit-animation: checkmark 0.25s ease-in-out 0.7s backwards;
            animation: checkmark 0.25s ease-in-out 0.7s backwards
        }

        .icon--order-success svg circle {
            -webkit-animation: checkmark-circle 0.6s ease-in-out backwards;
            animation: checkmark-circle 0.6s ease-in-out backwards;
        }
        .icon--order-success svg circle#colored {
            -webkit-animation: colored-circle 0.6s ease-in-out 0.7s backwards;
            animation: colored-circle 0.6s ease-in-out 0.7s backwards;
        }
    </style>
    @endsection
@section('content')
    <div class="container">

        <div class="row justify-content-md-center">
            <div class="col-lg-8 mb-7 mb-lg-0 mt-1">
                <div class="bg-gray-1 rounded-lg">

                        <div class="animation-ctn">
                            <div class="icon icon--order-success svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="154px" height="154px">
                                    <g fill="none" stroke="#22AE73" stroke-width="2">
                                        <circle cx="77" cy="77" r="72" style="stroke-dasharray:480px, 480px; stroke-dashoffset: 960px;"></circle>
                                        <circle id="colored" fill="#22AE73" cx="77" cy="77" r="72" style="stroke-dasharray:480px, 480px; stroke-dashoffset: 960px;"></circle>
                                        <polyline class="st0" stroke="#fff" stroke-width="10" points="43.5,77.8 63.7,97.9 112.2,49.4 " style="stroke-dasharray:100px, 100px; stroke-dashoffset: 200px;"/>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class="p-4 mb-4 checkout-table">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title mb-0 pb-2 font-size-25">Sipariş <b>Detayı</b></h3>
                            </div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-name">Ürün Adı</th>
                                    <th class="product-total">Fiyat</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Summary as $item)
                                <tr class="cart_item">
                                    <td>{{ $item->name }}<strong class="product-quantity"> X {{ $item->qty }}</strong></td>
                                    <td>{{ $item->qty *  $item->price }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Ara Toplam</th>
                                    <td>{{ $Customer->basket_total }}₺</td>
                                </tr>
                                <tr>
                                    <th>Kargo Ücreti</th>
                                    <td>Ücretsiz</td>
                                </tr>
                                <tr>
                                    <th>Toplam</th>
                                    <td><strong>{{ $Customer->basket_total }}₺</strong></td>
                                </tr>
                                </tfoot>
                            </table>

                            <div class="border-top border-width-3 border-color-1 pt-3 mb-3">
                                <table class="table">
                                    <tbody>
                                        <tr class="cart_item">
                                            <td><b>Adınız Soyadınız</b></td>
                                            <td>{{ $Customer->name.' '. $Customer->surname}}</td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td><b>Telefon Numaranız</b></td>
                                            <td>{{ $Customer->phone}}</td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td><b>Adresiniz</b></td>
                                            <td>{{ $Customer->address }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a  href="{{ route('home') }}" class="btn btn-primary-dark-w btn-block btn-pill font-size-20 mb-3 py-3">Anasayfaya Dön</a>
                        </div>
                    </div>
            </div>
        </div>

    </div>
    @endsection

