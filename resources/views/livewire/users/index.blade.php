<x-content>
    <x-slot name="header">
        <x-page-header icon="dna" header="{{ __('users.user_list') }}">
            <x-slot name="buttons">
                <button wire:click="$set('newUserModal', true)" class="ui green mini icon button">
                    <i class="plus icon"></i> {{ __('users.add_user' )}}
                </button>
            </x-slot>
        </x-page-header>
    </x-slot>

    <div class="p-5 grid md:grid-cols-2 lg:grid-cols-4 gap-5">
        @foreach ($this->users as $user)
        <x-user-card :user="$user" />
        @endforeach
    </div>

    <!-- #create user modal-->
    <div x-data="{newUserModal: @entangle('newUserModal')}">
        <x-custom-modal active="newUserModal">
            <div class="p-3">
                <h1 class="flex justify-center font-semibold text-2xl my-5">Create User </h1>
                <div class="ui mini form border p-2 rounded">
                    <x-input model="name" label="{{ __('users.user_name') }}" placeholder="{{ __('users.user_name') }}" />
                </div>
                <div class="ui mini form border p-2 rounded">
                    <x-input model="email" label="{{ __('users.user_email') }}" placeholder="{{ __('users.user_email') }}" />
                </div>
                <div class="ui mini form border p-2 rounded">
                    <x-input model="password" label="{{ __('users.user_password') }}" placeholder="{{ __('users.user_password') }}" />
                </div>
                <div class="ui mini form border p-2 rounded">
                    <x-dropdown model="role" :label="$label ?? 'users.user_role'" :sId="$sId ?? 'selectRole'" :sClass="$sClass ?? 'search'" class="required"
                        :collection="$this->rolesList ?? []" :value="$value ?? 'id'" :text="$text ?? 'name'" :key="$key ?? null" />
                </div>
                <div class="pt-4">
                    <button wire:click.prevent="createUser()" class="ui mini green button">
                        {{ __('common.save') }}
                    </button>
                </div>
            </div>
        </x-custom-modal>
    </div>



    {{-- Roles MODAL --}}
    @if ($selectedUser)
    <div x-data="{rolesModal: @entangle('rolesModal')}">
        <x-custom-modal active="rolesModal">
            <div class="p-3 border rounded shadow bg-white">
                <x-dropdown-multiple label="{{ __('roles.roles_for_user', ['user' => ucwords($selectedUser->name)]) }}" model="roleIds" sId="role_select" class="mini">
                    @foreach ($this->roles as $role)
                    <option value="{{ $role->id }}">
                        {{ $role->name }}
                    </option>
                    @endforeach
                </x-dropdown-multiple>
                <div class="pt-4" wire:loading.class="bg-red-700 invisible" wire:target="roleIds">
                    <button wire:click.prevent="submitRoles()" class="ui mini green button">
                        {{ __('common.save') }}
                    </button>
                </div>
            </div>
        </x-custom-modal>
    </div>
    @endif

    @include('web.helpers.deletable')


</x-content>