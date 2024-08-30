<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ProductSeeder::class);
        $this->call(ScenarioSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
