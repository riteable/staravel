@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="text-center">
            <h2 class="title">
                Admin
            </h2>

            <p class="subtitle">
                Use the force, {{ auth()->user()->name }}.
            </p>
        </div>
    </x-layout.container>
@endsection
