<?php

namespace App\Http\Livewire\Backend;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{

    public $asearch;

    public function render()
    {
        $All = Product::when($this->asearch, function ($query) {
            return $query->where('title', 'like', '%' . $this->asearch . '%');
        })->latest()->get();
        //dd($All);
        return view('livewire.backend.product-list', compact('All'));
    }
}
