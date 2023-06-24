<?php

namespace App\Http\Livewire;

use App\Models\RegisterBanner;
use Livewire\Component;

class RegisterPageBanner extends Component
{
    public function render()
    {
        $banners = RegisterBanner::latest()->where('isActive', '=', 1)->get();

        return view('livewire.register-page-banner', [
            'banners' => $banners,
        ]);
    }
}
