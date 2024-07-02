<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admmin.com',
            'number' => '08123456789',
            'alamat' => 'Jl. Admin No. 1',
            'ktp' => 'ktp.jpg',
            'kk' => 'kk.jpg',
            'password' => Hash::make('12345'),
            'isAdmin' => true
        ]);
    }
}
