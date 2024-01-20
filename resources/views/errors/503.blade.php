@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message')
<p>{{ __('503 Error')}}</p>
@endsection
