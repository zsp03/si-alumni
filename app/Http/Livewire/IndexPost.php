<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Collection;
use Livewire\Component;

class IndexPost extends Component
{
    public $perPage = 4;
    public $readyToLoad = false;
    public $postsCount;

    public function loadMore($count)
    {
        $this->perPage += $count;
    }
    public function loadPosts()
    {
        $this->postsCount = Post::all()->count();
        $this->readyToLoad = true;
    }
    public function render()
    {
        $listPosts = Post::with('tags')
            ->latest()
            ->take($this->perPage)
            ->paginate($this->perPage);

        return view('livewire.index-post',[
            'dataPosts' => $this->readyToLoad ? $listPosts : new Collection(),
            'postsCount' => $this->postsCount
        ]);
    }
}
