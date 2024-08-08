<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(['name' => 'MERCHANT']);
        Role::firstOrCreate(['name' => 'CUSTOMER']);
        Role::firstOrCreate(['name' => 'SUPERADMIN']);
    }
}
