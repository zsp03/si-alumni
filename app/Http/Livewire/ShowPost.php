<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPost extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = \App\Models\Post::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('pages.event.show');
    }
}
