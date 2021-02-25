@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="columns">
            @foreach ($users as $user)
                <x-layout.column context="list">
                    <div class="card">
                        <x-card.header>
                            @if ($user->isAdmin())
                                <x-icon name="heroicon-s-user" />
                            @else
                                <x-icon name="heroicon-o-user" />
                            @endif

                            {{ $user->name }}
                        </x-card.header>

                        <div class="card-content">
                            <div title="{{ $user->created_at }}">
                                {{ __('Created :timestamp', ['timestamp' => $user->created_at->diffForHumans()]) }}
                            </div>
                        </div>
                    </div>
                </x-layout.column>
            @endforeach
        </div>

        {{ $users->links() }}
    </x-layout.container>
@endsection
