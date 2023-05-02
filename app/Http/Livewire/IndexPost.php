<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class IndexPost extends Component
{
    public $perPage = 4;
    public $postsCount;
    protected $listeners = [
      'increasePerPage'
    ];
    public function increasePerPage($count)
    {
        $this->perPage += $count;
    }
    public function mount(Post $post)
    {
        $this->postsCount = $post->all()->count();
    }
    public function loadMore($counts)
    {
        $this->emit('increasePerPage', $counts);
    }
    public function render()
    {
        return view('livewire.index-post',[
            'dataPosts' => Post::all()->paginate($this->perPage)
        ]);
    }
}
