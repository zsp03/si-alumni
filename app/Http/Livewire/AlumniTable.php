<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class AlumniTable extends Component
{
    public $search;
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        return view('livewire.alumni-table',[
            'dataAlumni' => User::where('name','like','%'.$this->search.'%')->orderBy('name')->paginate(5)
        ]);
    }
}
