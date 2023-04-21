<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateAdditionalInformationForm extends Component
{
    protected $rules = [
        'jurusan' => 'required|min:6',
    ];
    public function mount()
    {
        $this->state = Auth::user()->withoutRelations()->toArray();
    }

    public function updateAdditionalInformation()
    {
        $this->resetErrorBag();

        Validator::make($this->state, [
            'jurusan' => ['required', 'string', 'max:255'],
            'angkatan' => ['required', 'numeric', 'max:4'],
            'instagram_account' => ['string', 'max:255'],
            'profile_desc' => ['string', 'max:255'],
        ])->validateWithBag('updateAdditionalInformation');

        $user = Auth::user();
        $user->jurusan = $this->state['jurusan'];
        $user->angkatan = $this->state['angkatan'];
        $user->instagram_account = $this->state['instagram_account'];
        $user->profile_desc = $this->state['profile_desc'];

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
