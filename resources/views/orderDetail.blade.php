<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Detail Pemesanan</title>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md">

        <div class="mb-6">
            <a href="/orderHistory" class="flex items-center text-lg text-blue-600 hover:underline w-fit mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16" class="mr-2">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
                Kembali
            </a>
            <h1 class="text-3xl font-bold text-gray-800">Detail Pemesanan</h1>
        </div>

        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-600">Nama Pemesan</label>
                <div class="w-full border px-4 py-2 rounded bg-gray-50">Budi Santoso</div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600">Nama Kendaraan</label>
                <div class="w-full border px-4 py-2 rounded bg-gray-50">Toyota Avanza</div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600">Tanggal Pemesanan</label>
                <div class="w-full border px-4 py-2 rounded bg-gray-50">20 Juni 2025</div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600">Tanggal Pakai</label>
                <div class="w-full border px-4 py-2 rounded bg-gray-50">21 Juni 2025</div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600">Tanggal Kembali</label>
                <div class="w-full border px-4 py-2 rounded bg-gray-50">23 Juni 2025</div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600">Keperluan</label>
                <div class="w-full border px-4 py-2 rounded bg-gray-50">Perjalanan Dinas ke Surabaya</div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600">Status</label>
                <div class="w-full border px-4 py-2 rounded bg-green-50 text-green-700 font-semibold">Disetujui</div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600">Disetujui Oleh</label>
                <div class="w-full border px-4 py-2 rounded bg-gray-50">Manajer Operasional</div>
            </div>
        </div>

        
        <div class="mt-10 text-right">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold">Edit</button>
        </div>
    </div>

</body>

</html>
