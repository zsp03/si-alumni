<?php

namespace App\Http\Livewire;

use App\Models\Newsletter;
use Livewire\Component;
use Livewire\WithPagination;

class ShowNewsletters extends Component
{
    public $search;
    use WithPagination;
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
                ->paginate(8)
        ]);
    }
}
