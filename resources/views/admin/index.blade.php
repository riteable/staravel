@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            <div class="has-text-centered">
                <h2 class="title">
                    {{ __('Admin') }}
                </h2>

                <p class="subtitle">
                    Use the force, {{ auth()->user()->name }}.
                </p>
            </div>
        </x-layout.compact>

        <div class="columns">
            <x-layout.column context="list">
                <div class="card">
                    <x-card.header
                        title="{{ __('Users') }}"
                        icon="heroicon-o-user"
                    />

                    <div class="card-content">
                        <a href="{{ route('admin.users.index') }}">
                            {{ __('Index') }}
                        </a>
                    </div>
                </div>
            </x-layout.column>
        </div>
    </x-layout.container>
@endsection
