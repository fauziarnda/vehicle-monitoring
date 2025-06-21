<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-2xl bg-white p-10 rounded-xl shadow-md">

        <div class="mb-6">
            <a href="/" class="flex items-center text-lg text-blue-600 hover:underline w-fit mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16" class="mr-2">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
                Kembali
            </a>
            <h1 class="text-3xl font-bold mb-8 text-black">Form Pemesanan Kendaraan</h1>
        </div>

        <form action="/orders" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="kendaraan" class="block text-lg font-medium text-gray-700 mb-1">Pilih Kendaraan</label>
                <select id="kendaraan" name="vehicle_id"
                    class="w-full border px-4 py-3 rounded-lg text-lg focus:ring-2 focus:ring-blue-500" required>
                    <option disabled selected>-- Pilih Kendaraan --</option>
                    @foreach ($vehicles as $vehicle)
                    <option value="{{ $vehicle->id }}">{{ $vehicle->nama_kendaraan }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="driver" class="block text-lg font-medium text-gray-700 mb-1">Pilih Driver</label>
                <select id="driver" name="driver_id"
                    class="w-full border px-4 py-3 rounded-lg text-lg focus:ring-2 focus:ring-blue-500" required>
                    <option disabled selected>-- Pilih Driver --</option>
                    @foreach ($drivers as $driver)
                    <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="tanggal" class="block text-lg font-medium text-gray-700 mb-1">Tanggal Pemakaian</label>
                <input type="date" id="tanggal" name="tanggal_pemakaian"
                    class="w-full border px-4 py-2 rounded-lg text-lg focus:ring-2 focus:ring-blue-500" required />
            </div>

            <div>
                <label for="lama" class="block text-lg font-medium text-gray-700 mb-1">Lama Pemakaian (hari)</label>
                <input type="number" id="lama" name="lama_pemakaian" min="1"
                    class="w-full border px-4 py-2 rounded-lg text-lg focus:ring-2 focus:ring-blue-500" required />
            </div>

            <div>
                <label for="keperluan" class="block text-lg font-medium text-gray-700 mb-1">Keperluan</label>
                <textarea id="keperluan" name="keperluan" rows="3"
                    class="w-full border px-4 py-2 rounded-lg text-lg focus:ring-2 focus:ring-blue-500"
                    required></textarea>
            </div>

            <div>
                <label for="approver_1" class="block text-lg font-medium text-gray-700 mb-1">Penyetuju Level 1</label>
                <select id="approver_1" name="approver1_id"
                    class="w-full border px-4 py-3 rounded-lg text-lg focus:ring-2 focus:ring-blue-500" required>
                    <option disabled selected>-- Pilih Penyetuju 1 --</option>
                    @foreach ($approvers as $approver)
                    <option value="{{ $approver->id }}">{{ $approver->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="approver_2" class="block text-lg font-medium text-gray-700 mb-1">Penyetuju Level 2</label>
                <select id="approver_2" name="approver2_id"
                    class="w-full border px-4 py-3 rounded-lg text-lg focus:ring-2 focus:ring-blue-500" required>
                    <option disabled selected>-- Pilih Penyetuju 2 --</option>
                    @foreach ($approvers as $approver)
                    <option value="{{ $approver->id }}">{{ $approver->name }}</option>
                    @endforeach
                </select>
            </div>


            <div>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold text-lg px-6 py-3 rounded-lg w-full transition">
                    Ajukan Pemesanan
                </button>
            </div>
        </form>
    </div>

</body>

</html>