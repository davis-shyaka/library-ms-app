<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create(['is_admin' => true]);

        $randomString = Str::random(10);

        $user = User::create(
            [
                'name' => 'Admin',
                'reg_number' => "000000000",
                'phone_number' => "0780979787",
                'email' => "admin@admin.com",
                'email_verified_at' => now(),
                'password' => bcrypt('adminpass'),
                'remember_token' => $randomString,
                'created_at' => now(),
                'is_admin' => true,
            ]
        );

        $user->assignRole('super-admin');
    }
}
