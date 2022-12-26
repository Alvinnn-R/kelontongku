<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123')
        ]);

        DB::table('users')->insert([
            'name' => 'Ahmad Adit',
            'role' => 'user',
            'user_id' => 1,
            'email' => 'ahmad@gmail.com',
            'password' => bcrypt('password123')
        ]);

        DB::table('users')->insert([
            'name' => 'Satya Dong',
            'role' => 'user',
            'user_id' => 2,
            'email' => 'satya@gmail.com',
            'password' => bcrypt('password123')
        ]);
    }
}
