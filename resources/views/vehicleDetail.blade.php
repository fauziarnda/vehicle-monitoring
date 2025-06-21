<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md">
        <div class=" mb-8">
            <a href="/vehicle" class="flex items-center text-lg text-blue-600 hover:underline w-fit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16" class="mr-2">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
                Kembali
            </a>
            <h1 class="text-3xl font-bold text-black">Detail Kendaraan</h1>
        </div>

        <!-- Informasi Umum -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Informasi Umum</h2>

            <!-- Gunakan variabel $vehicle yang dikirim dari route -->
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600">Nama Kendaraan</label>
                    <div class="w-full border px-4 py-2 rounded bg-gray-50">{{ $vehicle->nama_kendaraan }}</div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600">Jenis</label>
                    <div class="w-full border px-4 py-2 rounded bg-gray-50">{{ $vehicle->jenis }}</div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600">Kepemilikan</label>
                    <div class="w-full border px-4 py-2 rounded bg-gray-50">{{ $vehicle->kepemilikan }}</div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600">Nomor Polisi</label>
                    <div class="w-full border px-4 py-2 rounded bg-gray-50">{{ $vehicle->nomor_polisi }}</div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600">Tahun</label>
                    <div class="w-full border px-4 py-2 rounded bg-gray-50">{{ $vehicle->tahun }}</div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600">Status</label>
                    <div class="w-full border px-4 py-2 rounded bg-green-50 text-green-700 font-medium">
                        {{ $vehicle->status }}
                    </div>
                </div>
            </div>

            <!-- Spesifikasi -->
            <div class="space-y-4 mt-8">
                <div>
                    <label class="block text-sm font-medium text-gray-600">Konsumsi BBM</label>
                    <div class="w-full border px-4 py-2 rounded bg-gray-50">{{ $vehicle->konsumsi_bbm }}</div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600">Kapasitas</label>
                    <div class="w-full border px-4 py-2 rounded bg-gray-50">{{ $vehicle->kapasitas }}</div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600">Transmisi</label>
                    <div class="w-full border px-4 py-2 rounded bg-gray-50">{{ $vehicle->transmisi }}</div>
                </div>
            </div>

            <!-- Jadwal Servis -->
            <div class="space-y-4 mt-8">
                <div>
                    <label class="block text-sm font-medium text-gray-600">Servis Terakhir</label>
                    <div class="w-full border px-4 py-2 rounded bg-gray-50">
                        {{ \Carbon\Carbon::parse($vehicle->servis_terakhir)->translatedFormat('d F Y') }}
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600">Servis Berikutnya</label>
                    <div class="w-full border px-4 py-2 rounded bg-gray-50">
                        {{ \Carbon\Carbon::parse($vehicle->servis_berikutnya)->translatedFormat('d F Y') }}
                    </div>
                </div>
            </div>

            <!-- Riwayat -->
            <div class="mt-8">
                <label class="block text-sm font-medium text-gray-600 mb-2">Riwayat Pemakaian</label>
                <div class="w-full border px-4 py-2 rounded bg-gray-50 whitespace-pre-line">
                    {{ $vehicle->riwayat_pemakaian }}
                </div>
            </div>
</body>

</html>