<?php

namespace App\Http\Livewire\Message;

use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowMessageThreads extends Component
{
    public $isSelected = false;
    protected $listeners = ['refreshThreadList' => '$refresh'];

    public function deselectThread()
    {
        $this->isSelected = false;
    }
    public function render()
    {
        $threads = Thread::forUser(Auth::id())->latest('updated_at')->get();
        return view('livewire.message.show-message-threads', [
            'threads' => $threads,
        ]);
    }
}
