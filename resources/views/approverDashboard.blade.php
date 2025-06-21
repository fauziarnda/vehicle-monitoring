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
            <h1 class="text-2xl font-bold text-blue-600 mb-6">Daftar Pemesanan Menunggu Persetujuan</h1>

            @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif

            @forelse($orders as $order)
            <div class="border p-4 rounded mb-4 bg-gray-50">
                <p><strong>Kendaraan:</strong> {{ $order->vehicle->nama_kendaraan }}</p>
                <p><strong>Driver:</strong> {{ $order->driver->name ?? '-' }}</p>
                <p><strong>Keperluan:</strong> {{ $order->keperluan }}</p>
                <p><strong>Tanggal:</strong> {{ $order->tanggal_pemakaian }} selama {{ $order->lama_pemakaian }} hari
                </p>

                <form action="/orders/{{ $order->id }}/approve" method="POST" class="mt-4 inline-block">
                    @csrf
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Setujui</button>
                </form>

                <form action="/orders/{{ $order->id }}/reject" method="POST" class="mt-4 inline-block ml-2">
                    @csrf
                    <input type="text" name="alasan_penolakan" placeholder="Alasan penolakan"
                        class="border px-3 py-1 rounded mr-2" required>
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Tolak</button>
                </form>
            </div>
            @empty
            <p class="text-gray-600">Tidak ada pemesanan menunggu persetujuan.</p>
            @endforelse
        </main>
    </div>
</body>

</html>