<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk App Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white min-h-screen flex flex-col justify-center items-center">

    <h1 class="text-2xl font-semibold mb-2">Aplikasi CRUD</h1>
    <p class="text-gray-400 mb-6">by Ahmad.</p>

    <div class="flex space-x-4">
        @auth
            <a href="{{ url('/products') }}" class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded">
                Atur Produk
            </a>
        @else
            <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">
                Login
            </a>
            <a href="{{ route('register') }}" class="bg-gray-700 hover:bg-gray-800 px-4 py-2 rounded">
                Register
            </a>
        @endauth
    </div>

</body>
</html>
