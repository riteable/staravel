<header class="page-header">
    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <a href="/" class="navbar-item has-icon-left">
                <x-icon name="heroicon-s-beaker" size="24" class="has-text-muted" />

                <span class="has-text-body is-uppercase has-text-weight-bold">
                    {{ config('app.name') }}
                </span>
            </a>

            <a x-data @click="$store.menu.toggle()" role="button" class="navbar-burger" :class="{ 'is-active': $store.menu.isActive }">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div x-data id="main-menu" class="navbar-menu" :class="{ 'is-active': $store.menu.isActive }">
            <div class="navbar-end">
                    <div class="navbar-item">
                        <div>
                            @auth
                                <a href="{{ route('dashboard') }}" class="button">
                                    <x-icon name="heroicon-s-user" size="24" />
                                </a>

                                @role('admin')
                                    <a href="{{ route('admin.index') }}" class="button">
                                        <x-icon name="heroicon-s-lock-closed" size="24" />
                                    </a>
                                @endrole
                            @endauth

                            <x-button
                                x-data="{}"
                                x-init="$store.theme.init({
                                    id: 'stylesheet-theme',
                                    cookie: '{{ config('theme.cookie') }}',
                                    light: '{{ manifest_get('theme-light.css', 'assets-manifest.json') }}',
                                    dark: '{{ manifest_get('theme-dark.css', 'assets-manifest.json') }}'
                                })"
                                @click="$store.theme.toggle()"
                            >
                                <x-icon name="heroicon-s-moon" size="24" />
                            </x-button>
                        </div>
                    </div>
                @auth
                    <div class="navbar-item">
                        <form method="post" action="{{ route('logout') }}">
                            @csrf

                            <button class="button">
                                {{ __('Logout') }}
                            </button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div class="navbar-item">
                        <div>
                            <a href="{{ route('login') }}" class="button">
                                {{ __('Login') }}
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="button is-primary">
                                    {{ __('Register') }}
                                </a>
                            @endif
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </nav>
</header>
