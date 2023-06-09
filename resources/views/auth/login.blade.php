<x-guest-layout>
    @section('title','Login')
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-wireui.errors class="max-w-md mx-auto"/>
    <form method="POST" action="{{ route('login') }}" class="mx-auto mt-2 mb-0 max-w-md">
        @csrf
        <div class="space-y-4">
            <div>
                <x-label for="email" class="sr-only">Email</x-label>
                <div class="relative pt-1">
                    <x-input id="email" type="email" name="email" :value="old('email')"
                                  class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter email"
                                  required autofocus autocomplete="username" />
                    <span class="absolute inset-y-0 right-0 grid place-content-center px-4">
                        <i class="iconoir-at-sign text-gray-400 text-xl"></i>
                    </span>
                </div>
            </div>

            <div x-data="{ show : true }">

                <div class="relative pt-1" >
                    <x-input id="password" name="password" x-bind:type="show ? 'password' : 'text'" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                  placeholder="Enter password" required autocomplete="current-password" />
                    <span @click="show = ! show" class="absolute inset-y-0 right-0 grid place-content-center px-4">
                    <i class="text-gray-400 text-xl" :class="show ? 'iconoir-eye-empty' : 'iconoir-eye-off'"></i>
                    </span>
                </div>
            </div>

            <label for="remember_me" class="ml-1 inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-normal text-gray-600">{{ __('Remember me') }}</span>
            </label>

        </div>

        <div class="flex flex-col mt-4 gap-4">
            <div class="flex items-center">
                <button type="submit" class="w-full inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                    {{ __('Login') }}
                </button>
            </div>
            <p class="text-sm text-gray-500 text-center">
                <a class="underline" href="{{ route('password.request') }}"> {{ __('Forgot your password?') }}</a>
            </p>
            <p class="text-sm text-gray-500 text-center">
                {{  __('No account?') }}
                <a class="underline" href="{{ route('register') }}">{{ __('Register') }}</a>
            </p>
        </div>

    </form>
</x-guest-layout>
