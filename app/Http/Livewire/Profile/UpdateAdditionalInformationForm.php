<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateAdditionalInformationForm extends Component
{
    public function mount()
    {
        $this->state = Auth::user()->withoutRelations()->toArray();
    }

    public function updateAdditionalInformation()
    {
        $this->resetErrorBag();
        $user = Auth::user();
        $user->jurusan = $this->state['jurusan'];
        $user->instagram_account = $this->state['instagram_account'];
        $user->save();
        $this->emit('saved');
        $this->emit('refresh-navigation-menu');
    }

    public function getUserProperty()
    {
        return Auth::user();
    }

    public function render()
    {
        return view('profile.update-additional-information-form');
    }
}
