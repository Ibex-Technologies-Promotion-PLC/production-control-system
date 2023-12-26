@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message')

<p>{{ __('Page Expired')}}</p>
<form method="POST" action="{{ route('logout') }}" class="p-2 text-center">
                        @csrf
                        <span>{{ __('auth.logout')}}</span>
                        <button>
                            <i class="icon circular power cursor-pointer"></i>
                        </button>
                    </form>
                    
@endsection
