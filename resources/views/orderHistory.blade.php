<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>

    <body class="bg-gray-100 min-h-screen p-6">

        <div class="max-w-6xl mx-auto bg-white p-8 rounded-xl shadow-md">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Riwayat Pemesanan Kendaraan</h1>
                <p class="text-gray-500 text-sm mt-1">Berikut daftar pemesanan kendaraan dan status persetujuannya.</p>
            </div>

            <!-- Tabel -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
                    <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-3">Nama Kendaraan</th>
                            <th class="px-4 py-3">Tanggal Pesan</th>
                            <th class="px-4 py-3">Pemesan</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">Toyota Avanza</td>
                            <td class="px-4 py-3">20 Juni 2025</td>
                            <td class="px-4 py-3">Budi Santoso</td>
                            <td class="px-4 py-3">
                                <span
                                    class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">Disetujui</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="/orderHistory/detail" class="text-blue-600 hover:underline text-sm">Lihat
                                    Detail</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">Honda Mobilio</td>
                            <td class="px-4 py-3">21 Juni 2025</td>
                            <td class="px-4 py-3">Sari Wulandari</td>
                            <td class="px-4 py-3">
                                <span
                                    class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-semibold">Menunggu</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="/riwayat/2" class="text-blue-600 hover:underline text-sm">Lihat Detail</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">Isuzu Traga</td>
                            <td class="px-4 py-3">19 Juni 2025</td>
                            <td class="px-4 py-3">Rudi Hartono</td>
                            <td class="px-4 py-3">
                                <span
                                    class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-semibold">Ditolak</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="/riwayat/3" class="text-blue-600 hover:underline text-sm">Lihat Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </body>
</body>

</html>