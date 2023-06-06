<?php

namespace App\Http\Livewire\Message;

use App\Models\User;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireUi\Traits\Actions;

class ShowMessageCreate extends Component
{
    use Actions;
    public $isSelectDisabled = false;
    public $showModal = false;
    public $receiverOneId;
    public $receiver;
    public $subject;
    public $messageBody;
    protected $listeners = ['showCreateModal'];
    public function showCreateModal()
    {
        if (!$this->isSelectDisabled){
            $this->reset('subject','messageBody');
        }
        else $this->reset('receiver','subject','messageBody');

        $this->showModal = true;
    }
    public function sendMessage()
    {
        $thread = Thread::create([
            'subject' => $this->subject,
        ]);

        Message::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'body' => $this->messageBody,
        ]);

        Participant::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'last_read' => new Carbon(),
        ]);

        if ($this->isSelectDisabled){
            $thread->addParticipant($this->receiverOneId);
        }
        else $thread->addParticipant($this->receiver);

        $this->reset('showModal');
        if ($this->isSelectDisabled){
            $this->emit('closeUserProfileCard');
        }
        $this->notification()->send([
            'title' => 'Message sent',
            'description' => 'Your message was successfully sent',
            'icon' => 'success',
            'timeout' => 3000
        ]);
        $this->emit('refreshThreadList');
    }

    public function render()
    {
        return view('livewire.message.show-message-create');
    }
}
