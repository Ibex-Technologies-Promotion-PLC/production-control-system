@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message')
<p>{{ __('Unauthorized')}}</p>

<form method="POST" action="{{ route('logout') }}" class="p-2 text-center">
                        @csrf
                        <span>{{ __('auth.logout')}}</span>
                        <button>
                            <i class="icon circular power cursor-pointer"></i>
                        </button>
                    </form>
                    
@endsection

