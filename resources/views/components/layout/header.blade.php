<header class="bg-secondary">
    <x-layout.container padding="3">
        <nav class="navbar">
            <div class="navbar-section">
                <a href="/" class="text-bold text-uppercase text-decoration-none">
                    <span class="text-large">
                        <x-heroicon-s-beaker class="icon icon-24" />
                    </span>
                    {{ config('app.name') }}
                </a>
            </div>

            <div class="navbar-section">
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-link">
                        <x-heroicon-s-user class="icon icon-24" />
                    </a>

                    <form method="post" action="{{ route('logout') }}" class="ml-1">
                        @csrf

                        <button class="btn btn-link has-icon-left">
                            <x-heroicon-o-logout class="icon icon-24" />

                            {{ __('Logout') }}
                        </button>
                    </form>
                @endauth

                @guest
                    <div>
                        <a href="{{ route('login') }}" class="btn btn-link">
                            {{ __('Login') }}
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">
                                {{ __('Register') }}
                            </a>
                        @endif
                    </div>
                @endguest
            </div>
        </nav>
    </x-layout.container>
</header>
