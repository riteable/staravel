<header class="bg-secondary">
    <x-layout.container padding="3">
        <nav class="navbar">
            <div class="navbar-section">
                <a href="{{ url('/') }}" class="text-bold text-uppercase text-decoration-none">
                    <span class="text-large">
                        <x-heroicon-s-beaker class="icon icon-24" />
                    </span>
                    {{ config('app.name') }}
                </a>
            </div>

            <div class="navbar-section">
                @auth
                    <form method="post" action="{{ route('logout') }}">
                        @csrf

                        <button class="btn">
                            {{ __('Logout') }}
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-link">
                        {{ __('Login') }}
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">
                            {{ __('Register') }}
                        </a>
                    @endif
                @endif
            </div>
        </nav>
    </x-layout.container>
</header>
