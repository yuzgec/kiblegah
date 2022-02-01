<li class="col-6 {{ (!$size) ? 'col-md-4' :  $size }} product-item">
    @foreach($Product as $item)
    <div class="product-item__outer h-100">
        <div class="product-item__inner px-xl-4 p-3">
            <div class="product-item__body pb-xl-2">
                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">{{ $item->title }}</a></h5>
                <div class="mb-2">
                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center">
                        <img class="img-fluid" src="https://www.kiblegahaileoyunlari.com.tr/goadmin/files/config/images/urun/kiblegah_aile_oyunlari_61dee6fdd27a5.jpg" alt="Image Description">
                    </a>
                </div>
                <div class="flex-center-between mb-1">
                    <div class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                        <ins class="font-size-20 text-black text-decoration-none mr-2 font-weight-bold">6669.90₺ - <del class="font-size-1">59.90</del></ins>
                    </div>
                    <div class="d-none d-xl-block prodcut-add-cart">
                        <a href="#" class="btn px-2 btn-sm transition-3d-hover"><i class="ec ec-add-to-cart mr-2 font-size-16"></i> Sepete Ekle</a>
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
    @endforeach
</li>
