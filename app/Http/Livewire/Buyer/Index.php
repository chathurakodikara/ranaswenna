<?php

namespace App\Http\Livewire\Buyer;

use App\Models\Buyer;
use Livewire\Component;

class Index extends Component
{
    public $buyers = [];

    public function mount()
    {
        $this->buyers = Buyer::all();
    }

    public function render()
    {
        return view('livewire.buyer.index');
    }
}
