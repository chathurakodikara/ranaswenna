<?php

namespace App\Http\Livewire;

use App\Models\Item;
use App\Models\Farmer;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class ProductForm extends Component
{
    public $categories = [];
    public $items = [];

    public $farmerNic, $farmerName, $farmer;

    public $product_category, $item_id, $description, $unit, $qty, $unit_price, $organic, $transport;


    protected $rules = [
        'farmerNic' => 'required|exists:farmers,nic',
        'product_category'=> 'required',
        'item_id'=> 'required|exists:items,id',
        'description'=> 'nullable|max:255',
        'unit'=> 'required|max:10|in:Kg,Units,tons',
        'qty'=> 'required|max:99999.99|numeric',
        'unit_price'=> 'nullable|max:999999.99|numeric',
        'organic'=> 'nullable|boolean',
        'transport'=> 'nullable|boolean',
    ];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedFarmerNic()
    {

        if (strlen($this->farmerNic) == 10 || strlen($this->farmerNic) == 12) {

            $this->farmer = Farmer::where('nic', $this->farmerNic)->first();
            $this->farmerName = $this->farmer->name ?? '';
        }
    }

    public function updatedProductCategory()
    {
        $this->items = Item::where('category_id', $this->product_category)->get();
    }

    public function productSubmit()
    {

        $this->validate();

        $this->farmer->products()->create([ 
            'items_id' => $this->item_id,
            'description' => $this->description,
            'unit' =>  $this->unit,
            'qty' =>  $this->qty,
            'unit_price' =>  $this->unit_price,
            'transport' =>  $this->transport,
            'organic' =>  $this->organic,
            'asc_id' =>  1,
            'gs_id' =>  1,
            'user_id' => auth()->user()->id
        ]);

    }



    public function render()
    {

        return view('livewire.product-form');
    }
}
