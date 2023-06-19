<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;

class IndexPostByTags extends Component
{
    public $tags;
    public $post;
    public $perPage = 4;
    protected $listeners = [
        'increasePerPage'
    ];
    public function increasePerPage($count)
    {
        $this->perPage += $count;
    }
    public function loadMore($counts)
    {
        $this->emit('increasePerPage', $counts);
    }

    public function mount($tags)
    {
        if(Tag::where('name', '=', $tags)->doesntExist()){
            abort('404');
        }

        $this->tags = $tags;
    }
    public function render()
    {
        $listPosts = Post::with('tags')->whereHas('tags',function ($query) {
            return $query->where('name', 'LIKE', '%' .$this->tags.'%');
        });
        $postsCount = $listPosts->count();

        return view('livewire.index-post-by-tags',[
            'dataPosts' => $listPosts
                ->get()
                ->sortByDesc('created_at')
                ->paginate($this->perPage),
            'postsCount' => $postsCount
        ]);
    }
}
