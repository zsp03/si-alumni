<?php

namespace App\Http\Livewire;

use App\Models\Alumni;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class AlumniTable extends Component
{
    public $search;
    public $showingUserProfileCard = false;
    public $dataAlumni;
    protected $listeners = ['closeUserProfileCard'];
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function closeUserProfileCard()
    {
        $this->showingUserProfileCard = false;
    }
    public function showUserProfileCard(User $alumni)
    {
        $this->dataAlumni = $alumni;
        $this->showingUserProfileCard = true;
    }

    public function render()
    {
        $dataAlumnis = Alumni::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('nim', 'like', $this->search . '%')
            ->orWhere('program_studi', 'like', '%' . $this->search . '%')
            ->orWhere('fakultas', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', $this->search . '%')
            ->orderBy('name')
            ->paginate(7);
        return view('livewire.alumni-table', [
            'dataAlumnis' => $dataAlumnis,
        ]);
    }
}