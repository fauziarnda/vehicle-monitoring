<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Approver User',
            'email' => 'approver@example.com',
            'password' => Hash::make('approver123'),
            'role' => 'approver',
        ]);
        User::create([
            'name' => 'Approver User 2',
            'email' => 'approver02@example.com',
            'password' => Hash::make('approver123'),
            'role' => 'approver',
        ]);
    }
}
