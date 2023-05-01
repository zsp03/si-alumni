<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class IndexPost extends Component
{
    public function render()
    {
        return view('livewire.index-post',[
            'dataPosts' => Post::all()
        ]);
    }
}
