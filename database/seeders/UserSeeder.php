<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Exceptions\Handler;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin'=>'1',
        ]);
        User::insert([
            'name' => 'Loan',
            'email' => 'loan@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin'=>'0',
        ]);
    }
}
