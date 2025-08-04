<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-100">Tambah Produk</h2>
    </x-slot>

    <div class="max-w-xl mx-auto bg-gray-800 text-white shadow-lg p-6 rounded-lg mt-6">
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-500/10 text-red-400 border border-red-500/20 rounded">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Nama Produk -->
            <div>
                <label class="block text-sm font-medium text-gray-200">Nama Produk <span class="text-red-400">*</span></label>
                <input type="text" name="nama" value="{{ old('nama') }}"
                       class="mt-1 block w-full bg-gray-700 border border-gray-600 text-white rounded px-3 py-2 shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Deskripsi -->
            <div>
                <label class="block text-sm font-medium text-gray-200">Deskripsi</label>
                <textarea name="deskripsi" rows="3"
                          class="mt-1 block w-full bg-gray-700 border border-gray-600 text-white rounded px-3 py-2 shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500">{{ old('deskripsi') }}</textarea>
            </div>

            <!-- Harga -->
            <div>
                <label class="block text-sm font-medium text-gray-200">Harga <span class="text-red-400">*</span></label>
                <input type="number" name="harga" value="{{ old('harga') }}"
                       class="mt-1 block w-full bg-gray-700 border border-gray-600 text-white rounded px-3 py-2 shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Stok -->
            <div>
                <label class="block text-sm font-medium text-gray-200">Stok <span class="text-red-400">*</span></label>
                <input type="number" name="stok" min="0" value="{{ old('stok', 0) }}"
                       class="mt-1 block w-full bg-gray-700 border border-gray-600 text-white rounded px-3 py-2 shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Aksi -->
            <div class="flex justify-end">
                <a href="{{ route('products.index') }}"
                   class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded mr-2 transition">
                    Batal
                </a>
                <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded shadow transition">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
