<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Seeder;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $merchant = User::create([
            'email' => 'merchant@mail.com',
            'password' => bcrypt('password123'),
            'email_verified_at' => now(),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        UserDetail::create([
            'user_id' => $merchant->id,
        ]);
        event(new Registered($merchant));
        $merchant->assignRole('MERCHANT');

        $customer = User::create([
            'email' => 'customer@mail.com',
            'password' => bcrypt('password123'),
            'email_verified_at' => now(),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        UserDetail::create([
            'user_id' => $customer->id,
        ]);
        event(new Registered($customer));
        $customer->assignRole('CUSTOMER');

        $superadmin = User::create([
            'email' => 'superadmin@mail.com',
            'password' => bcrypt('password123'),
            'email_verified_at' => now(),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        event(new Registered($superadmin));
        $superadmin->assignRole('SUPERADMIN');
    }
}
