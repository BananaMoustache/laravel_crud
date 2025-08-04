<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-white leading-tight">
            Selamat Datang
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 text-white overflow-hidden shadow-lg sm:rounded-lg p-6">
                <p class="mb-4 text-lg">Selamat Datang Kembali, {{ Auth::user()->name }}!</p>

                <a href="{{ url('/products') }}"
                   class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded shadow text-sm transition">
                    Atur Produk
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
