<?php

namespace App\Http\Livewire;

use App\Models\Offering;
use Livewire\Component;
use Livewire\WithPagination;

class IndexJobs extends Component
{
    public $search;
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        $jobs = Offering::where('name','like','%'.$this->search.'%')
            ->latest()
            ->get()
            ->paginate(4);
        return view('livewire.index-jobs', [
            'jobs' => $jobs
        ]);
    }
}
