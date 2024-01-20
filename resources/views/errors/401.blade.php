@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message')
<p>{{ __('Unauthorized')}}</p>                    
@endsection

