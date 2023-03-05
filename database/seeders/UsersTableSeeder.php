<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $param = [
        //     'name' => 'seederUser',
        //     'email' => 'seeder@email.com',
        //     'password' => Hash::make('password'),
        //     'email_verified_at' => now(),
        // ];
        // DB::table('users')->insert($param);
        User::factory()->count(10)->create();
        User::factory()->unverified()->count(2)->create();
    }
}
