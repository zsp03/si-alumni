<?php

namespace App\Http\Livewire\Message;

use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ReplyMessageForm extends Component
{
    public $body;
    public $thread;
    public function sendReply(Thread $thread)
    {
        Message::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'body' => $this->body,
        ]);

        $this->reset('body');
        $this->emit('refreshThreadList');
        $this->emit('loadThread', $thread->id);
    }
    public function render()
    {
        return view('livewire.message.reply-message-form', [
            'thread' => $this->thread,
        ]);
    }
}
