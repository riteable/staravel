@extends('errors.error')

@section('title', __('Too many requests'))
@section('code', '429')
@section('message', __('You are requesting this page too many times.'))
