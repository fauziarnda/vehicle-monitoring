<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-7xl mx-auto">
        <div class=" mb-8">
            <a href="/" class="flex items-center text-lg text-blue-600 hover:underline w-fit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16" class="mr-2">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
                Kembali
            </a>
            <h1 class="text-3xl font-bold text-black mb-6">Monitoring Kendaraan</h1>
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow p-6">
            <table class="min-w-full table-auto text-sm text-left">
                <thead class="text-gray-600 border-b">
                    <tr>
                        <th class="py-3 px-4">Nama Kendaraan</th>
                        <th class="py-3 px-4">Jenis</th>
                        <th class="py-3 px-4">Kepemilikan</th>
                        <th class="py-3 px-4">Konsumsi BBM</th>
                        <th class="py-3 px-4">Jadwal Servis</th>
                        <th class="py-3 px-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($vehicles as $vehicle)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $vehicle->nama_kendaraan }}</td>
                        <td class="py-3 px-4">{{ $vehicle->jenis }}</td>
                        <td class="py-3 px-4">{{ $vehicle->kepemilikan }}</td>
                        <td class="py-3 px-4">{{ $vehicle->konsumsi_bbm }}</td>
                        <td class="py-3 px-4">
                            {{ \Carbon\Carbon::parse($vehicle->servis_berikutnya)->translatedFormat('d F Y') }}
                        </td>
                        <td class="py-3 px-4 text-right">
                            <a href="/vehicle/{{ $vehicle->id }}" class="text-blue-600 hover:underline">Lihat Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>