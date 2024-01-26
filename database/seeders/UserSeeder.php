<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\table;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'admin',
                    'email' => 'admin@email.com',
                    'password' => Hash::make('admin')
                ],
                [
                    'name' => 'user',
                    'email' => 'user@email.com',
                    'password' => Hash::make('user')
                ],
                [
                    'name' => 'manager',
                    'email' => 'manager@email.com',
                    'password' => Hash::make('manager')
                ]
            ]
        );
    }
}
