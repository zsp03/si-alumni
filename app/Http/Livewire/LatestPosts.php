<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class LatestPosts extends Component
{
    public function render()
    {
        $posts = Post::latest()->take(4)->get();
        return view('livewire.latest-posts', [
            'posts' => $posts
        ]);
    }
}
