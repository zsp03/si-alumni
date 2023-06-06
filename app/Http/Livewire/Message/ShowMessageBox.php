<?php

namespace App\Http\Livewire\Message;

use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireUi\Traits\Actions;

class ShowMessageBox extends Component
{
    public $thread;
    public $messages;
    public $selectedThread = false;
    protected $listeners = ['loadThread', 'deselectThread', 'refreshMessages' => '$refresh'];

    public function loadThread(Thread $thread)
    {
        $this->thread = $thread;
        $this->messages = $thread->messages;
        $this->selectedThread = true;
    }
    public function deselectThread()
    {
        $this->selectedThread = false;
    }
    public function render()
    {
        return view('livewire.message.show-message-box', [
            'messages' => $this->messages,
            'thread' => $this->thread,
        ]);
    }
}
