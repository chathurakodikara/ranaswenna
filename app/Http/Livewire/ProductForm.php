<?php

namespace App\Http\Livewire;

use App\Models\Gs;
use App\Models\Asc;
use App\Models\Item;
use App\Models\Farmer;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class ProductForm extends Component
{
    public $categories = [];
    public $items = [];
    public $ascs = [];
    public $gss = [];

    public $farmerNic, $farmerName, $farmer;

    public $product_category, $item_id, $description, $unit, $qty, $unit_price, $organic, $transport, $asc_id, $gs_id;


    protected $rules = [
        'farmerNic' => 'required|exists:farmers,nic',
        'product_category'=> 'required',
        'item_id'=> 'required|exists:items,id',
        'description'=> 'nullable|max:255',
        'unit'=> 'required|max:10|in:Kg,Units,tons',
        'qty'=> 'required|max:99999.99|numeric',
        'unit_price'=> 'nullable|max:999999.99|numeric',
        'organic'=> 'nullable|boolean',
        'asc_id'=> 'required',
        'gs_id'=> 'required',
        'transport'=> 'nullable|boolean',
    ];

    public function mount()
    {
        $this->categories = Category::all();
        $this->ascs = Asc::all();
    }

    public function updatedFarmerNic()
    {

        if (strlen($this->farmerNic) == 10 || strlen($this->farmerNic) == 12) {

            $this->farmer = Farmer::where('nic', $this->farmerNic)->first();

            $this->farmerName = $this->farmer->name ?? '';
            $this->asc_id = $this->farmer->asc_id ?? '';

            $this->updatedAscId($this->asc_id);
            $this->gs_id = $this->farmer->gs_id ?? '';

        }
    }

    public function updatedProductCategory()
    {
        $this->items = Item::where('category_id', $this->product_category)->get();
    }

    public function updatedAscId($id)
    {
        $this->gss = Gs::where('asc_id', $id)->get();
    }

    public function productSubmit()
    {

        $this->validate();

        $this->farmer->products()->create([
            'item_id' => $this->item_id,
            'description' => $this->description,
            'unit' =>  $this->unit,
            'qty' =>  $this->qty,
            'unit_price' =>  $this->unit_price,
            'transport' =>  $this->transport,
            'organic' =>  $this->organic,
            'asc_id' =>  $this->asc_id,
            'gs_id' =>  $this->gs_id,
            'user_id' => auth()->user()->id
        ]);
        session()->flash('message', 'Post successfully updated.');

        return redirect()->to('/myshop');

    }



    public function render()
    {

        return view('livewire.product-form');
    }
}
