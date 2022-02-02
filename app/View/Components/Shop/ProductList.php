<?php

namespace App\View\Components\Shop;

use App\Models\Product;
use Illuminate\View\Component;

class ProductList extends Component
{
    public $size = null;
    public $paginate = null;
    public $limit = null;


    public function __construct($size,$paginate,$limit )
    {
        $this->size = $size;
        $this->paginate = $paginate;
        $this->limit = $limit;
    }

    public function render()
    {
        $Product = Product::with('getCategory')->paginate($this->paginate);
        return view('components.shop.product-list', compact('Product'));
    }
}
