@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message')
<p>{{ __('Internal Server Error')}}</p>
@endsection
