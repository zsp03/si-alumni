<?php

namespace App\Http\Livewire\Message;

use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowMessageDelete extends Component
{
    public $thread;
    public $showModal;
    protected $listeners = ['showDeleteModal'];
    public function showDeleteModal()
    {
        $this->showModal = true;
    }
    public function deleteThread(Thread $thread)
    {
        $thread->removeParticipant(Auth::id());
        $this->showModal = false;
        $this->emit('deselectThread');
        $this->emit('refreshThreadList');
    }

    public function render()
    {
        return view('livewire.message.show-message-delete');
    }
}
