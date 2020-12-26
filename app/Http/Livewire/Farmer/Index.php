<?php

namespace App\Http\Livewire\Farmer;

use App\Models\Farmer;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    public $search;
    protected $listeners = ['search'];
    // public $data;
    // public $neweditfarmer = false;

    public function search($search)
    {
        $this->search = $search;
    }

    public function editFarmer($id)
    {
        // $this->neweditfarmer = true;
        $this->emitTo('farmer.edit-farmer','farmer', $id);
    }

    public function render()
    {
        $farmers = Farmer::where('nic', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('name', 'LIKE', '%'.$this->search.'%')
                            ->paginate(10);

        return view('livewire.farmer.index',[
            'farmers' =>$farmers
        ]);
    }
}
