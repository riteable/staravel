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
    </x-layout.container>
@endsection
