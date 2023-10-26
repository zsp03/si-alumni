<?php

namespace App\Filament\Http\Livewire\Auth\CustomLogin;

use Filament\Forms\ComponentContainer;
use Illuminate\Contracts\View\View;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Facades\Filament;
use Filament\Http\Livewire\Auth\Login as BaseLogin;
use Filament\Http\Responses\Auth\Contracts\LoginResponse as FilamentLoginResponse;
use Illuminate\Auth\Events\Failed;
use Webbingbrasil\FilamentTwoFactor\FilamentTwoFactor;
use Webbingbrasil\FilamentTwoFactor\Http\Responses\Auth\LoginResponse as TwoFactorLoginResponse;

/**
 * @property ComponentContainer $form
 */
class CustomLogin extends BaseLogin
{
    protected $user;

    public function authenticate(): ?FilamentLoginResponse
    {
        $this->doRateLimit();

        $data = $this->form->getState();

        $model = Filament::auth()->getProvider()->getModel();
        $this->user = $model::where('email', $data['email'])->first();

        if (!$this->validateCredentials($data)) {
            return null;
        }

        if (app(FilamentTwoFactor::class)->hasTwoFactorEnabled($this->user)) {
            request()->session()->put([
                'login.id' => $this->user->getKey(),
                'login.remember' => $data['remember'],
            ]);

            return app(TwoFactorLoginResponse::class);
        }

        Filament::auth()->login($this->user, $data['remember']);

        return app(FilamentLoginResponse::class);
    }

    public function doRateLimit()
    {
        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            $this->addError($this->fieldType, __('filament::login.messages.throttled', [
                'seconds' => $exception->secondsUntilAvailable,
                'minutes' => ceil($exception->secondsUntilAvailable / 60),
            ]));

            return null;
        }
    }

    protected function validateCredentials(array $data): bool
    {
        if (!$this->user || !Filament::auth()->getProvider()->validateCredentials($this->user, ['password' => $data['password']])) {
            $this->addError('email', __('filament::login.messages.failed'));
            return false;
        }

        return true;
    }
    public function render(): View
    {
        return view('filament::login')
            ->layout('filament::components.layouts.card', [
                'title' => __('Welcome'),
            ]);
    }
}