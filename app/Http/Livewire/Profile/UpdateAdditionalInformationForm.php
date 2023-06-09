<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;
use WireUi\Traits\Actions;

class UpdateAdditionalInformationForm extends Component
{
    use Actions;
    public function mount()
    {
        $this->state = Auth::user()->withoutRelations()->toArray();
    }

    public function updateAdditionalInformation()
    {
        $this->resetErrorBag();

        Validator::make($this->state, [
            'jurusan' => ['nullable','string', 'max:255'],
            'angkatan' => ['nullable', 'integer', 'max_digits:4'],
            'instagram_account' => ['nullable','string', 'max:255'],
            'profile_desc' => ['nullable','string', 'max:255'],
        ])->validateWithBag('updateAdditionalInformation');

        $user = Auth::user();
        $user->angkatan = $this->state['angkatan'];
        $user->instagram_account = $this->state['instagram_account'];
        $user->profile_desc = $this->state['profile_desc'];

        $user->save();
        $this->notification()->send([
            'title' => 'Profile saved',
            'description' => 'Your profile was successfully saved',
            'icon' => 'success',
            'timeout' => 3000
        ]);
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
