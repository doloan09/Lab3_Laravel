<?php

namespace Database\Seeders;

use App\Exceptions\Handler;
use App\Models\Users;
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
        Users::insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => md5('123'),
            'permission' => 1
        ]);
        Users::insert([
            'name' => 'Loan',
            'email' => 'loan@gmail.com',
            'password' => md5('123'),
            'permission' => 0
        ]);
    }
}
