@extends('errors.error')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('You need to login to access this page.'))
