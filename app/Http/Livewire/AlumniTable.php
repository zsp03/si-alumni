<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class AlumniTable extends Component
{
    public $search;
    public $showingUserProfileCard = false;
    public $dataAlumni;
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        $dataAlumnis =  User::where('name','like','%'.$this->search.'%')->orderBy('name')->paginate(5);
        return view('livewire.alumni-table',[
            'dataAlumnis' => $dataAlumnis,
        ]);
    }

    public function showUserProfileCard(User $alumni){
        $this->dataAlumni = $alumni;
        $this->showingUserProfileCard = true;
    }
}
