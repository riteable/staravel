@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            <div class="text-center">
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
                    <x-card.header title="{{ __('Users') }}" subtitle="{{ __('Manage your users') }}" />

                    <div class="card-body">
                        <a href="{{ route('admin.users.index') }}">
                            {{ __('Index') }}
                        </a>
                    </div>
                </div>
            </x-layout.column>
        </div>
    </x-layout.container>
@endsection
