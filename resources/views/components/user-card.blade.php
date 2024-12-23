<div class="rounded bg-white w-full border shadow">
    <div class="p-2 shadow">
        <div class="p-4 bg-teal-800 flex flex-col gap-5 items-center rounded-t">
            <div>
                <x-circle-image :user="$user" height="h-28" />
            </div>
            <div class="font-bold text-teal-900 bg-white rounded-sm px-2 py-0.5">
                {{ $user->name }}
            </div>
        </div>
    </div>

    <div class="p-2">
        <div class="p-2 border border-dashed hover:border-teal-400 flex flex-col gap-10 shadow-inner bg-gray-50">
            <div class="font-semibold">
                <div class="font-bold">{{ __('auth.mail_address') }}:</div>
                <div class="text-sm text-ease">{{ $user->email }}</div>
            </div>
            <div>
                <div class="font-bold">{{ __('auth.last_login') }}:</div>
                <div class="text-sm text-ease">{{ $user->logedinAt()->diffForHumans() }}</div>
            </div>
            <div>
                <div class="font-bold">{{ __('auth.last_activity') }}</div>
                <div class="text-sm">
                    @if ($lastActivity)
                        <p>Last activity: {{ $lastActivity->description }} -
                            {{ $lastActivity->created_at->format('d M Y, h:i A') }}</p>
                        <span class="text-ease-red cursor-pointer">{{ __('common.see_all') }}</span>
                    @else
                        <p>No activities found for this user.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="bg-smoke-lighter flex">
        <div wire:click.prevent="openRolesModal({{ $user->id }})"
            class="w-full py-2 text-center hover:bg-smoke-dark hover:text-white cursor-pointer">
            <i class="user icon"></i>
            {{ __('roles.define_roles') }}
        </div>
        @if (!$user->isSystemAdmin())
            <div wire:click.prevent="delete({{ $user->id }})"
                class="w-full py-2 text-center hover:bg-smoke-dark hover:text-white cursor-pointer">
                <i class="red trash icon"></i>
                Sil
            </div>
        @endif
    </div>

</div>
