<header class="navbar container bg-secondary py-2">
    <div class="navbar-section">
        <a href="{{ url('/') }}" class="text-small text-bold text-uppercase">
            {{ config('app.name') }}
        </a>
    </div>

    <div class="navbar-section">
        @auth
            <form method="post" action="{{ route('logout') }}">
                @csrf

                <button class="btn btn-sm">
                    {{ __('Logout') }}
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-sm btn-link">
                {{ __('Login') }}
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-sm btn-primary">
                    {{ __('Register') }}
                </a>
            @endif
        @endif
    </div>
</header>
