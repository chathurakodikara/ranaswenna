<?php

namespace App\Http\Livewire\Buyer;

use App\Models\Buyer;
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
        $buyers = Buyer::where('business', 'LIKE', '%'.$this->search.'%')
                                    ->orWhere('contacted_person', 'LIKE', '%'.$this->search.'%')
                                    ->paginate(10);

        return view('livewire.buyer.index',[
            'buyers' => $buyers
        ]);
    }
}
