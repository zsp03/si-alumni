<?php

namespace App\Http\Livewire;

use App\Models\Banner;
use Livewire\Component;

class FrontBanner extends Component
{
    public function render()
    {
        $banners = Banner::latest()->where('isActive', '=', 1)->get();
        return view('livewire.front-banner', [
            'banners' => $banners,
        ]);
    }
}
