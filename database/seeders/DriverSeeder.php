<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Driver;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Driver::truncate();

        Driver::create([
            'name' => 'Budi Santoso',
            'phone' => '081234567890',
            'license_number' => 'SIM1234567890',
        ]);

        Driver::create([
            'name' => 'Andi Setiawan',
            'phone' => '082233445566',
            'license_number' => 'SIM0987654321',
        ]);

        Driver::create([
            'name' => 'Siti Nurhaliza',
            'phone' => '083344556677',
            'license_number' => 'SIM1122334455',
        ]);
    }
}
