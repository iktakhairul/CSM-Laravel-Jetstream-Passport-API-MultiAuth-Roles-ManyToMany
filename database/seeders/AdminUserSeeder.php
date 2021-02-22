<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'Ikta Khairul',
            'email' => 'iktakhairul@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'Khairul Islam Rupom',
            'email' => 'khairulislamrupom231@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 3,
        ]);

    }
}
