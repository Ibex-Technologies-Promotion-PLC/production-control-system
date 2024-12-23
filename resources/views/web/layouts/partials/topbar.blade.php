
<div class="px-2 py-2 shadow bg-white relative">
    <div class="flex justify-between items-center">

        <div class="">
            <i class="link hamburger icon hover:text-red-600" @click="sidebar = !sidebar"></i>
        </div>


        <div class="flex gap-4">
            <div>
            @include('web.layouts.partials.language_switcher')
            </div>
            <div>
                <i class="large link bell icon"></i>
            </div>
            <div>
                <i class="large link envelope icon"></i>
            </div>
            <div class="relative" x-data="{userModal: false}" x-cloak>
                <div @click="userModal = ! userModal">
                    <i class="large link fingerprint icon"></i>
                </div>
                <div x-show="userModal" @click.away="userModal = false" 
                    class="absolute right-0 mt-1 z-40  border shadow bg-white rounded flex flex-col " style="min-width: 15rem;">
                
                    <div class="border-b border-dashed px-3 py-2 text-ease cursor-pointer hover:bg-gray-100">
                        <i class="user icon"></i>
                        <span>{{ auth()->user()->name}}</span>
                    </div>
                    
                    @can('manage users')
                        <a href="{{ route('users.index') }}" class="border-b border-dashed px-3 py-2 bg-red-800 text-white hover:bg-red-500 hover:text-white cursor-pointer">
                            <i class="users icon"></i>
                            <span>{{ __('manage_users')}}</span>
                        </a>
                        <a href="{{ route('roles.index') }}"  class="border-b border-dashed px-3 py-2 bg-red-800 text-white hover:bg-red-500 hover:text-white cursor-pointer">
                            <i class="dna icon"></i>
                            <span>{{ __('define_roles')}}</span>
                        </a>
                    @endcan

                    <form method="POST" action="{{ route('logout') }}" class="p-2 text-center">
                        @csrf
                        <span>{{ __('auth.logout')}}</span>
                        <button>
                            <i class="icon circular power cursor-pointer"></i>
                        </button>
                    </form>

                </div>
            </div>
        </div>

        
    </div>
</div>




{{-- <div class="absolute right-0 mt-3 mr-3 flex items-center justify-center">
    <x-circle-image height="h-14 w-14"/>
</div> --}}