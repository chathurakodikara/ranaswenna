<?php

namespace App\Http\Livewire\Asc;

use App\Models\Asc;
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
        $ascs = Asc::where('name', 'LIKE', '%'.$this->search .'%')
                        ->orWhere('district', 'LIKE', '%'.$this->search .'%')
                        ->paginate(10);

        return view('livewire.asc.index',[
            'ascs' => $ascs
        ]);
    }
}
