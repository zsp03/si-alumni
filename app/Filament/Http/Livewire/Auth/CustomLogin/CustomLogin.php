<?php

namespace App\Filament\Http\Livewire\Auth\CustomLogin;

use Filament\Forms\ComponentContainer;
use Filament\Http\Livewire\Auth\Login as BaseLogin;
use Illuminate\Contracts\View\View;


/**
 * @property ComponentContainer $form
 */
class CustomLogin extends BaseLogin
{
    public function render(): View
    {
        return view('filament::login')
            ->layout('filament::components.layouts.card', [
                'title' => __('Welcome'),
            ]);
    }
}
