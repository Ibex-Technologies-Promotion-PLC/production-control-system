@extends('errors::minimal')

@section('title', __('Page Not Found'))
@section('code', '404')
@section('message')
<p>{{ __('Page Not Found')}}</p>

@endsection
