<?php

namespace App\Http\Livewire;

use App\Models\Newsletter;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowNewsletters extends Component
{
    public $search;

    protected $queryString = [
        'search' => ['except' => '']
    ];
    public function render()
    {
        return view('livewire.show-newsletters',[
            'dataNewsletters' => Newsletter::where('series','like','%'.$this->search.'%')
                ->orWhere('series_acr','like','%'.$this->search.'%')
                ->orWhere('cover_alumni','like','%'.$this->search.'%')
                ->orWhere('title','like','%'.$this->search.'%')
                ->get()
                ->sortByDesc('published_date')
        ]);
    }
}
