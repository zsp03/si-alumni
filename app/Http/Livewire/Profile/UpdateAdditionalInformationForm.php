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
            'phone_number' => ['required', 'string', 'max:255'],
            'jurusan' => ['required', 'string', 'max:255'],
            'instagram_account' => ['string', 'max:255'],
        ])->validateWithBag('updateAdditionalInformation');

        $user = Auth::user();
        $user->phone_number = $this->state['phone_number'];
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
