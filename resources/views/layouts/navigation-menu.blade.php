<nav x-data="{ open: false }" class="sticky top-0 z-50 bg-prusblue">
    <!-- Primary Navigation Menu -->
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-20">
            <!-- Logo -->
            <div class="shrink-0 flex mr-auto items-center">
                <a @if(auth()->check()) href="{{ route('home') }}" @else href="{{ route('landing') }}" @endif>
                    <x-application-logo class="block h-12 w-auto fill-current text-gray-800" />
                </a>
                <div class="pt-1 whitespace-nowrap ml-3 font-semibold text-base leading-none">
                    @if(auth()->check())
                    <div class="text-white">
                        Portal Alumni
                    </div>
                    <div class="text-white mb-2">
                        Universitas Hasanuddin
                    </div>
                    @else
                    <div class="text-white font-thin">
                        Direktorat Hubungan Alumni &
                        <br>
                        Pengembangan Dana Abadi
                    </div>
                    <div class="text-white mb-2 font-thin">
                        Universitas Hasanuddin
                    </div>
                    @endif

                </div>
            </div>
            <!-- Navigation Links -->
            <div class="hidden space-x-2 xl:space-x-6 items-center mx-auto lg:flex">
                @if(auth()->check())
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('jobs')" :active="request()->routeIs('jobs')">
                        {{ __('Jobs') }}
                    </x-nav-link>
                    <x-nav-link :href="route('event')" :active="request()->routeIs('event')">
                        {{ __('News & Events') }}
                    </x-nav-link>
                    <x-nav-link :href="route('database')" :active="request()->routeIs('database')">
                        {{ __('Database') }}
                    </x-nav-link>
                    <x-nav-link :href="route('newsletter')" :active="request()->routeIs('newsletter')">
                        {{ __('Newsletter') }}
                    </x-nav-link>
                    <x-nav-link :href="route('messages')" :active="request()->routeIs('messages')">
                        {{ __('Messages') }}
                    </x-nav-link>
                    <x-nav-link href='https://alumni.unhas.ac.id/dana-abadi' target="_blank" :active="request()->routeIs('')">
                        {{ __('Donasi') }}
                    </x-nav-link>
                @else
                    <x-nav-link href="{{ route('landing') }}" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link href='#dana-abadi'>
                        {{ __('Donasi') }}
                    </x-nav-link>
                    <x-nav-link href="#news" :active="request()->routeIs('event')">
                        {{ __('News & Events') }}
                    </x-nav-link>
                    <x-nav-link href="#about-us">
                        {{ __('About us') }}
                    </x-nav-link>
                    <div class="relative">
                        <x-dropdown>
                            <x-slot name="trigger">
                                    <a class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium focus:outline-none focus:text-white focus:border-gray-300 transition duration-150 ease-in-out">Survey</a>
                            </x-slot>
                            <div x-show = "open">
                                <x-slot name="content">
                                    <x-dropdown-link href="https://tracerstudy.unhas.ac.id/">
                                        {{ __('Tracer Study') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link href="https://tracerstudy.unhas.ac.id/survey/566599">
                                        {{ __('Survey Alumni') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link href="{{ route('survey') }}">
                                        {{ __('Penjaring Alumni') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </div>
                        </x-dropdown>
                    </div>
                @endif

            </div>

            <div class="hidden lg:flex sm:items-center sm:ml-auto @if(!auth()->check()) w-48 justify-end @endif">

                <!-- Settings Dropdown -->
                @if(auth()->check())
                    <div class="relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex items-center bg-gray-200 text-sm font-semibold text-gray-500 py-1 px-4 rounded-lg focus:outline-none focus:border-none focus:bg-white focus:text-gray-700 hover:text-gray-700 hover:bg-gray-200 transition">
                                        <span class="hidden lg:flex pr-2">{{ Str::of(Auth::user()->name)->explode(' ')->first() }}</span>
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                @if (\Illuminate\Support\Facades\Auth::user()->canAccessFilament())
                                    <x-dropdown-link href="{{ route('filament.auth.login') }}" target="_blank">
                                        {{ __('Admin Panel') }}
                                    </x-dropdown-link>
                                @endif

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-200"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}"
                                                     @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-sm normal-case">
                        <i class="iconoir-log-in"></i>
                        Login
                    </a>
                @endif

            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden bg-white border-b-2 shadow">
        <div class="pt-2 pb-3 space-y-1">
            @if(auth()->check())
                <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('database')" :active="request()->routeIs('database')">
                    {{ __('Database') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('jobs')" :active="request()->routeIs('jobs')">
                    {{ __('Jobs') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('event')" :active="request()->routeIs('event')">
                    {{ __('News & Events') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('newsletter')" :active="request()->routeIs('newsletter')">
                    {{ __('Newsletter') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('messages')" :active="request()->routeIs('messages')">
                    {{ __('Messages') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href='https://alumni.unhas.ac.id/dana-abadi' :active="request()->routeIs('')">
                    {{ __('Donasi') }}
                </x-responsive-nav-link>
            @else
                <x-responsive-nav-link href="{{ route('landing') }}" :active="request()->routeIs('landing')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href='https://alumni.unhas.ac.id/dana-abadi' :active="request()->routeIs('')">
                    {{ __('Donasi') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('event')" :active="request()->routeIs('event')">
                    {{ __('News & Events') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#about-us">
                    {{ __('About us') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="https://tracerstudy.unhas.ac.id/">
                    {{ __('Tracer Study') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="https://tracerstudy.unhas.ac.id/survey/566599">
                    {{ __('Survey Alumni') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('survey') }}">
                    {{ __('Penjaring Alumni') }}
                </x-responsive-nav-link>

            @endif

        </div>

        <!-- Responsive Settings Options -->

        <div class="pt-2 pb-2 border-t border-gray-200">
            @if(auth()->check())
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    @if (\Illuminate\Support\Facades\Auth::user()->canAccessFilament())
                        <x-responsive-nav-link href="{{ route('filament.auth.login') }}">
                            {{ __('Admin Panel') }}
                        </x-responsive-nav-link>
                    @endif

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}"
                                               @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>

                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-responsive-nav-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                {{ __('Create New Team') }}
                            </x-responsive-nav-link>
                        @endcan

                        <div class="border-t border-gray-200"></div>

                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                </div>
            @else
                <x-responsive-nav-link class="flex items-center gap-2" href="{{ route('login') }}">
                    <i class="iconoir-log-in"></i>
                    {{ __('Login') }}
                </x-responsive-nav-link>
            @endif
        </div>
    </div>
</nav>
