<?php

namespace App\View\Components\Shop;

use App\Models\Product;
use Illuminate\View\Component;

class ProductList extends Component
{
    public $size;

    public function __construct($size = null)
    {
        $this->size = $size;
    }

    public function render()
    {
        $Product = Product::with('getCategory')->get();
        return view('components.shop.product-list', compact('Product'));
    }
}
