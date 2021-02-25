@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="columns">
            @foreach ($users as $user)
                <x-layout.column context="list">
                    <div class="card">
                        <x-card.header :icon="$user->isAdmin() ? 'heroicon-s-user' : 'heroicon-o-user'">
                            {{ $user->name }}
                        </x-card.header>

                        <div class="card-content content">
                            <p>
                                {{ $user->email }}
                            </p>

                            <p title="{{ $user->created_at }}" class="has-text-muted">
                                {{ __('Created :timestamp', ['timestamp' => $user->created_at->diffForHumans()]) }}
                            </p>
                        </div>
                    </div>
                </x-layout.column>
            @endforeach
        </div>

        {{ $users->links() }}
    </x-layout.container>
@endsection
