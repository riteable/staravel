@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="columns">
            @foreach ($users as $user)
                <x-layout.column context="list">
                    <div class="card">
                        <x-card.header>
                            @if ($user->isAdmin())
                                <x-heroicon-s-user class="icon icon-16 text-success" />
                            @else
                                <x-heroicon-o-user class="icon icon-16 text-gray" />
                            @endif

                            {{ $user->name }}

                            <x-slot name="subtitle">
                                {{ $user->email }}

                                @if ($user->email_verified_at)
                                    <span title="{{ $user->email_verified_at }}">
                                        <x-heroicon-s-check class="icon text-success" />
                                    </span>
                                @endif
                            </x-slot>
                        </x-card.header>

                        <div class="card-body">

                            <div title="{{ $user->created_at }}">
                                {{ __('Created :timestamp', ['timestamp' => $user->created_at->diffForHumans()]) }}
                            </div>
                        </div>
                    </div>
                </x-layout.column>
            @endforeach
        </div>
    </x-layout.container>
@endsection
