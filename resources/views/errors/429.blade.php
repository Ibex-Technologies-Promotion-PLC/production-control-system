@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message')
<p>{{__('Too Many Requests')}}</p>
<form method="POST" action="{{ route('logout') }}" class="p-2 text-center">
                        @csrf
                        <span>{{ __('auth.logout')}}</span>
                        <button>
                            <i class="icon circular power cursor-pointer"></i>
                        </button>
                    </form>
@endsection
