<header class="navbar container bg-dark py-1">
    <div class="navbar-section">
        <a href="{{ url('/') }}" class="text-light text-small text-bold text-uppercase">
            {{ config('app.name') }}
        </a>
    </div>

    <div class="navbar-section">
        @auth
            <form method="post" action="{{ route('logout') }}">
                @csrf

                <button class="btn btn-link text-light">
                    {{ __('Logout') }}
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-link text-light">
                {{ __('Login') }}
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-link text-light">
                    {{ __('Register') }}
                </a>
            @endif
        @endif
    </div>
</header>
