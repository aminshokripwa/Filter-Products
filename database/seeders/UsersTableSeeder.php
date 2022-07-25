<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'     => 'Admin',
                'email'    => 'admin@admin.com',
				'email_verified_at' => now(),
                'password' => bcrypt('password'),
				'remember_token' => time(),
            ]
        ];

        User::insert($users);
    }
}
