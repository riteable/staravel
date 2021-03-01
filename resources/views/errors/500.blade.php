@extends('errors::minimal')

@section('title', __('Server error'))
@section('code', '500')
@section('message', __('An internal server error has occurred.'))
