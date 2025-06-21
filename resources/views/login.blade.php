<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center bg-gray-100 ">

    <div class="w-full max-w-md bg-white rounded-lg shadow-xl p-10">
        <h1 class="text-3xl font-bold  text-black mb-8">Login </h1>
        <form action="/login" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="text-lg font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-lg" />
            </div>

            <div>
                <label for="password" class="text-lg font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-lg" />
            </div>
            <div>
                <button type="submit"
                    class="w-full py-3 mt-6 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-lg font-semibold transition">
                    Login
                </button>
            </div>
        </form>
        <p class="text-sm text-center text-gray-500 mt-6">© 2025 Sistem Kendaraan Dinas</p>
    </div>

</body>

</html>