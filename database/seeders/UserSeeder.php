<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::create(
        //     [
        //         'name' => 'Student',
        //         'reg_number' => "220004459",
        //         'phone_number' => "0787770727",
        //         'email' => "student@student.com",
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('password'),
        //         'remember_token' => Str::random(10),
        //         'created_at' => now(),
        //         'is_admin' => false,
        //     ]
        // );

        // $user->assignRole('student');

        User::factory(2)->create()->each(function ($user) {
            $user->assignRole('student');
        });
    }
}
