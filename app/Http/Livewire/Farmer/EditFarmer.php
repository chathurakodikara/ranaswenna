<?php

namespace App\Http\Livewire\Farmer;

use Livewire\Component;

class EditFarmer extends Component
{
    public $farmer;
    public $ascs = [];
    public $gss = [];

    public function render()
    {
        return view('livewire.farmer.edit-farmer');
    }
}
