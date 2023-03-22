<x-guest-layout>
    @section('title','Login')
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}" class="mx-auto mt-8 mb-0 max-w-md space-y-4">
        @csrf
        <div>
            <x-input-label for="email" class="sr-only">Email</x-input-label>

            <div class="relative pt-1">
                <x-text-input id="email" type="email" name="email" :value="old('email')"
                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter email"
                    required autofocus autocomplete="username" />
                <span class="absolute inset-y-0 right-0 grid place-content-center px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </span>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <div>
            <x-input-label for="password" class="sr-only">Password</x-input-label>

            <div class="relative pt-1">
                <x-text-input id="password" name="password" type="password" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                    placeholder="Enter password" required autocomplete="current-password" />
                <span class="absolute inset-y-0 right-0 grid place-content-center px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </span>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-between">
            <p class="text-sm text-gray-500">
                No account?
                <a class="underline" href="{{ route('register') }}">Sign up</a>
            </p>

            <button type="submit" class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                Masuk
            </button>
        </div>
    </form>
</x-guest-layout>
