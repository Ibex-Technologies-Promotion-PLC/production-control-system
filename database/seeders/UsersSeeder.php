<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $su = User::create([
            'name' => 'super admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(env('SU_ADMIN_PASS', '123456789')),
            'remember_token' => Str::random(10),
        ]);
        
        $su->assignRole('super admin');

        
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(env('ADMIN_PASS', '123456789')),
            'remember_token' => Str::random(10),
        ]);
        
        $admin->assignRole('admin');
        
        $adminRole = Role::findByName('admin');
        $adminRole->givePermissionTo(Permission::all());


        User::create([
            'name' => 'unauthorized user',
            'email' => 'unauthorized@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'remember_token' => Str::random(10),
        ]);


        User::factory()->count(20)->create();

    }
}
