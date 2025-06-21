<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="min-h-screen bg-gray-100">

    <div class="flex h-full">

        <x-sidebar></x-sidebar>

        <main class="flex-1 p-8 overflow-y-auto">
            <h1 class="text-3xl font-bold mb-6">Selamat Datang, Admin!</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-8">
                <a href="/orderForm" class="bg-blue-600 hover:bg-blue-700 text-white p-4 rounded-lg shadow text-center">
                    Buat Pemesanan
                </a>
                <a href="/monitoring"
                    class="bg-green-600 hover:bg-green-700 text-white p-4 rounded-lg shadow text-center">
                    Lihat Monitoring
                </a>
                <a href="/riwayat"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white p-4 rounded-lg shadow text-center">
                    Cek Riwayat
                </a>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <p class="text-sm text-gray-500">Total Kendaraan</p>
                    <p class="text-2xl font-bold text-blue-600">12</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <p class="text-sm text-gray-500">Pemesanan Bulan Ini</p>
                    <p class="text-2xl font-bold text-green-600">28</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <p class="text-sm text-gray-500">Menunggu Persetujuan</p>
                    <p class="text-2xl font-bold text-yellow-600">5</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-4 mt-8">
                <h2 class="text-xl font-semibold mb-4">Grafik Pemesanan Kendaraan</h2>
                <canvas id="chartPemesanan" height="100"></canvas>
            </div>

            <div class="bg-white rounded-lg shadow p-4 mt-8">
                <h2 class="text-xl font-semibold mb-4">Pemesanan Terbaru</h2>
                <table class="w-full text-left text-sm">
                    <thead class="border-b font-medium text-gray-600">
                        <tr>
                            <th class="py-2">Kendaraan</th>
                            <th class="py-2">Tanggal</th>
                            <th class="py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2">Toyota Avanza</td>
                            <td class="py-2">20 Juni 2025</td>
                            <td class="py-2 text-green-600">Disetujui</td>
                            <td class="py-2">
                                <a href="/pemesanan/1" class="text-blue-600 hover:underline">Lihat Detail</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2">Honda Mobilio</td>
                            <td class="py-2">21 Juni 2025</td>
                            <td class="py-2 text-yellow-600">Menunggu</td>
                            <td class="py-2">
                                <a href="/pemesanan/2" class="text-blue-600 hover:underline">Lihat Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>


    <script>
        const ctx = document.getElementById('chartPemesanan').getContext('2d');
        new Chart(ctx, {
            type: 'bar', // bisa 'line', 'pie', dll.
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Jumlah Pemesanan',
                    data: [12, 19, 7, 14, 18, 10],
                    backgroundColor: 'rgba(59, 130, 246, 0.5)', // biru Tailwind
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>