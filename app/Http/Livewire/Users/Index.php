<?php

namespace App\Http\Livewire\Users;

use App\Http\Livewire\Deletable;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;

class Index extends Component
{
    use Deletable;
    public $model = User::class;

    public $rolesModal = false;
    public $selectedUser;
    public $roleIds = [];

    public $newUserModal = false;
    public $editUserModal = false;
    public $name;
    public $email;
    public $password;
    public $role;
    public $editingUser;
    public $AppModelsUser;


    public function createUser()
    {
            // dd($this->name,$this->email, $this->password, $this->role);
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'role' => 'required',


        ]);

        $password = $this->password ? $this->password : Str::random(10);

        // Create the new user
         $roles = Role::find($this->role);
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = bcrypt($password);
        $user->save();
        $user->assignRole($roles->name);


        $this->closeCreateUserModal();
        $this->dispatch('toast', __('common.saved.title'), __('common.saved.standard'), 'success');

    }
    public function closeCreateUserModal()
    {
        $this->newUserModal = false;
        $this->reset(['name', 'email', 'password', 'role']);
    }

    public function openEditModal($userId)
    {
        $this->editingUser = User::find($userId);
        if ($this->editingUser) {
            $this->name = $this->editingUser->name;
            $this->email = $this->editingUser->email;
            $this->role = $this->editingUser->roles->first()?->id;
            $this->password = ''; // Don't populate password for security
            $this->editUserModal = true;
        }
    }

    public function updateUser()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->editingUser->id,
            'role' => 'required',
        ];

        // Only validate password if it's provided
        if (!empty($this->password)) {
            $rules['password'] = 'min:8';
        }

        $this->validate($rules);

        // Update user data
        $this->editingUser->name = $this->name;
        $this->editingUser->email = $this->email;
        
        // Only update password if provided
        if (!empty($this->password)) {
            $this->editingUser->password = bcrypt($this->password);
        }
        
        $this->editingUser->save();

        // Update role
        $role = Role::find($this->role);
        if ($role) {
            $this->editingUser->syncRoles([$role->name]);
        }

        $this->closeEditUserModal();
        $this->dispatch('toast', __('common.saved.title'), __('common.saved.changes'), 'success');
    }

    public function closeEditUserModal()
    {
        $this->editUserModal = false;
        $this->reset(['name', 'email', 'password', 'role', 'editingUser']);
    }
    public function getUsersProperty()
    {
        return User::all();
    }
    public function getRolesListProperty()
    {
        return Role::all();
    }

    public function getRolesProperty()
    {
        return Role::all();
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
        $roles =Role::whereIn('id', $this->roleIds)->pluck('name')->toArray();

        $this->selectedUser->syncRoles($roles);
        $this->closeRolesModal();
    }


    public function render()
    {
        return view('livewire.users.index');
    }
}
