@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message')
<form method="POST" action="{{ route('logout') }}" class="p-2 text-center">
                        @csrf
                        <span>{{ __('auth.logout')}}</span>
                        <button>
                            <i class="icon circular power cursor-pointer"></i>
                        </button>
                    </form>
@endsection
