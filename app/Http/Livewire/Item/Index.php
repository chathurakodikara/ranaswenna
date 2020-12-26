<?php

namespace App\Http\Livewire\Item;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    public $search;

    protected $listeners = ['search'];

    public function search($search)
    {
        $this->search =$search;
    }

    public function render()
    {
        $items = Item::where('name', 'LIKE', '%'.$this->search.'%')
                                    ->paginate(10);

        return view('livewire.item.index',[
            'items' =>$items
        ]);
    }
}
