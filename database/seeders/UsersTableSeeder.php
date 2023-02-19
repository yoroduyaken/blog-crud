<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'seederUser',
            'email' => 'seeder@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
    }
}
