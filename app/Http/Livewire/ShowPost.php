<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }
    public function render()
    {
        return view('pages.event.show');
    }
}
