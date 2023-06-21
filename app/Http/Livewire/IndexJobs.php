<?php

namespace App\Http\Livewire;

use App\Models\Offering;
use Livewire\Component;
use Livewire\WithPagination;

class IndexJobs extends Component
{
    use WithPagination;

    public function render()
    {
        $jobs = Offering::latest()->paginate(4);
        return view('livewire.index-jobs', [
            'jobs' => $jobs
        ]);
    }
}
