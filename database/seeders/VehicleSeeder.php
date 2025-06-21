<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\vehicles;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        vehicles::truncate();

        vehicles::create([
            'nama_kendaraan' => 'Toyota Avanza',
            'jenis' => 'Angkutan Orang',
            'kepemilikan' => 'Milik Perusahaan',
            'nomor_polisi' => 'N 1234 AB',
            'tahun' => 2020,
            'status' => 'Aktif',
            'konsumsi_bbm' => '12 km/l',
            'kapasitas' => '7 Penumpang',
            'transmisi' => 'Manual',
            'servis_terakhir' => '2025-06-10',
            'servis_berikutnya' => '2025-07-20',
            'riwayat_pemakaian' => 'Dipakai luar kota 5 hari (Mei 2025)',
        ]);

        vehicles::create([
            'nama_kendaraan' => 'Mitsubishi L300',
            'jenis' => 'Angkutan Barang',
            'kepemilikan' => 'Disewa',
            'nomor_polisi' => 'N 5678 CD',
            'tahun' => 2019,
            'status' => 'Aktif',
            'konsumsi_bbm' => '9 km/l',
            'kapasitas' => '2 Ton',
            'transmisi' => 'Manual',
            'servis_terakhir' => '2025-05-10',
            'servis_berikutnya' => '2025-07-10',
            'riwayat_pemakaian' => '10 kali pemakaian 6 bulan terakhir',
        ]);

        vehicles::create([
            'nama_kendaraan' => 'Toyota Innova',
            'jenis' => 'Angkutan Orang',
            'kepemilikan' => 'Milik Perusahaan',
            'nomor_polisi' => 'N 7788 XX',
            'tahun' => 2022,
            'status' => 'Aktif',
            'konsumsi_bbm' => '11 km/l',
            'kapasitas' => '7 Penumpang',
            'transmisi' => 'Automatic',
            'servis_terakhir' => '2025-06-01',
            'servis_berikutnya' => '2025-07-30',
            'riwayat_pemakaian' => 'Baru digunakan 3 kali tahun ini',
        ]);

        vehicles::create([
            'nama_kendaraan' => 'Isuzu Elf',
            'jenis' => 'Angkutan Orang',
            'kepemilikan' => 'Disewa',
            'nomor_polisi' => 'N 9090 EF',
            'tahun' => 2018,
            'status' => 'Tidak Aktif',
            'konsumsi_bbm' => '8 km/l',
            'kapasitas' => '16 Penumpang',
            'transmisi' => 'Manual',
            'servis_terakhir' => '2025-04-10',
            'servis_berikutnya' => '2025-06-10',
            'riwayat_pemakaian' => 'Nonaktif sejak Februari 2025',
        ]);

        vehicles::create([
            'nama_kendaraan' => 'Suzuki Carry',
            'jenis' => 'Angkutan Barang',
            'kepemilikan' => 'Milik Perusahaan',
            'nomor_polisi' => 'N 3322 BG',
            'tahun' => 2021,
            'status' => 'Aktif',
            'konsumsi_bbm' => '10 km/l',
            'kapasitas' => '1.5 Ton',
            'transmisi' => 'Manual',
            'servis_terakhir' => '2025-06-15',
            'servis_berikutnya' => '2025-08-15',
            'riwayat_pemakaian' => 'Digunakan untuk distribusi logistik',
        ]);
    }
}
