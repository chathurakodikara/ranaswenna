<?php

namespace App\Http\Livewire\Gs;

use App\Models\Gs;
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
        $gss = Gs::where('name', 'LIKE', '%'.$this->search.'%' )
                                ->paginate(10);

        return view('livewire.gs.index',[
            'gss' => $gss
        ]);
    }
}
