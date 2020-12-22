<?php

namespace App\Http\Livewire\Farmer;

use App\Models\Gs;
use App\Models\Asc;
use Livewire\Component;

class FarmerForm extends Component
{
    public $ascs = [];
    public $gss = [];
    public $asc_id;

    public function mount()
    {
        $this->ascs = Asc::all();
    }

    public function updatedAscId()
    {
        $this->gss = Gs::where('asc_id', $this->asc_id)->get();
    }


    public function render()
    {
        return view('livewire.farmer.farmer-form');
    }
}
