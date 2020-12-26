<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FloatingActionButton extends Component
{
    public $link ;
    public function render()
    {
        return view('livewire.floating-action-button');
    }
}
