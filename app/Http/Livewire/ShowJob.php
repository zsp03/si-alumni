<?php

namespace App\Http\Livewire;

use App\Models\Offering;
use Livewire\Component;

class ShowJob extends Component
{
    public $job;
    public function mount(Offering $job)
    {
        $this->job = $job;
    }

    public function render()
    {
        return view('pages.jobs.show', [
            'requirements' => json_decode($this->job->requirement, true)
        ]);
    }
}
