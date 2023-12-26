@extends('errors::minimal')

@section('title', __('Page Not Found'))
@section('code', '404')
@section('message')
<p>{{ __('Page Not Found')}}</p>
<form method="POST" action="{{ route('logout') }}" class="p-2 text-center">
                        @csrf
                        <span>{{ __('auth.logout')}}</span>
                        <button>
                            <i class="icon circular power cursor-pointer"></i>
                        </button>
                    </form>
@endsection
