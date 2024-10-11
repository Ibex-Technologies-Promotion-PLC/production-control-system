<?php

namespace App\Http\Livewire\Users;

use App\Http\Livewire\Deletable;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Str;

class Index extends Component
{
    use Deletable;
    public $model = User::class;

    public $rolesModal = false;
    public $selectedUser;
    public $roleIds = [];

    public $newUserModal = false;
    public $name;
    public $email;
    public $password;
    public $role;


    public function createUser()
    {

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|exists:roles,name',
            'password' => 'null|string|min:6',


        ]);

        // $password = $this->password ? $this->password : Str::random(10);

        // Create the new user
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->save();

        $user->assignRole($this->role);


        $this->closeCreateUserModal();
        session()->flash('message', 'User created successfully!');
    }
    public function closeCreateUserModal()
    {
        $this->newUserModal = false;
        $this->reset(['name', 'email', 'password', 'role']);
    }
    public function getUsersProperty()
    {
        return User::allExceptSU();
    }
    public function getRolesListProperty()
    {
        return Role::all();
    }

    public function getRolesProperty()
    {
        return Role::allExceptSU();
    }


    public function openRolesModal($userId)
    {
        $this->selectedUser = $this->getUsersProperty()->find($userId);
        $this->roleIds = $this->selectedUser->roles->pluck('id')->toArray();
        $this->rolesModal = true;
    }


    public function closeRolesModal()
    {
        $this->reset('rolesModal', 'selectedUser', 'roleIds');
    }

    public function updatedRolesModal($bool)
    {
        if ($bool == false) $this->closeRolesModal();
    }

    public function updatedRoleIds()
    {
        if ($this->selectedUser->isLastAdmin() || $this->selectedUser->isSystemAdmin()) {
            $this->roleIds = $this->selectedUser->roles->pluck('id')->toArray();
            $this->dispatch('toast', '', __('roles.there_must_be_at_least_one_admin_in_the_system'), 'warning');
        }
    }

    public function submitRoles()
    {
        if (!$this->selectedUser) return;
        $this->selectedUser->syncRoles($this->roleIds);
        $this->closeRolesModal();
    }


    public function render()
    {
        return view('livewire.users.index');
    }
}
