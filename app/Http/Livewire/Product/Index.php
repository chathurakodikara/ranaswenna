<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    public $search;

    protected $listeners = ['search'];

    public function search($search)
    {
        $this->search = $search;
    }

    public function render()
    {
        $products = Product::where('farmer_id', 'LIKE', '%'.$this->search.'%')
                                        ->paginate(10);

        return view('livewire.product.index',[
            'products' => $products
        ]);
    }
}
