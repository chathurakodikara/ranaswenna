<?php

namespace App\Http\Livewire\Farmer;

use App\Models\Farmer;
use Livewire\Component;

class Index extends Component
{
    public $farmers = [];
    // public $data;
    // public $neweditfarmer = false;

    public function mount()
    {
        $this->farmers = Farmer::all();
    }
    public function editFarmer($id)
    {
        // $this->neweditfarmer = true;
        $this->emitTo('farmer.edit-farmer','farmer', $id);
    }

    public function render()
    {
        return view('livewire.farmer.index');
    }
}
