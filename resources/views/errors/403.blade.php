@extends('errors::minimal')

@section('title', __('Page Bettt'))
@section('code', '403')
@section('message')
<p>{{__('Page Bettt')}}</p>
<form method="POST" action="{{ route('logout') }}" class="p-2 text-center">
                        @csrf
                        <span>{{ __('auth.logout')}}</span>
                        <button>
                            <i class="icon circular power cursor-pointer"></i>
                        </button>
                    </form>
@endsection
