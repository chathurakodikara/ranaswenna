<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchIndexInput extends Component
{
    public $search_index ;

    public function render()
    {
        $this->emit('search', $this->search_index);
        return view('livewire.search-index-input');
    }
}
