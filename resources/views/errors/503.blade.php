@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message')
<form method="POST" action="{{ route('logout') }}" class="p-2 text-center">
                        @csrf
                        <span>{{ __('auth.logout')}}</span>
                        <button>
                            <i class="icon circular power cursor-pointer"></i>
                        </button>
                    </form>
@endsection
