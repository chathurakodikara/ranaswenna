<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $search;

    protected $listeners = ['search'];

    public function mount()
    {
    }

    public function search($search)
    {
        $this->search = $search;
    }

    public function render()
    {
        $categories = Category::where('name', 'LIKE', '%'.$this->search.'%')
                                            ->paginate(10);

        return view('livewire.categories.index',[
            'categories' =>$categories
        ]);
    }
}
