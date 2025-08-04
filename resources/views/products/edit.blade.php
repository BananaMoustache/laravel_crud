<form method="POST" action="{{ route('products.update', $product) }}" class="bg-gray-800 p-6 rounded-lg shadow-lg text-white">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @csrf
    @method('PUT')

    <!-- Nama -->
    <div class="mb-4">
        <label for="nama" class="block text-sm font-semibold text-gray-200">Nama Produk</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $product->nama) }}"
               class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-indigo-400 focus:ring-indigo-400 sm:text-sm">
    </div>

    <!-- Harga -->
    <div class="mb-4">
        <label for="harga" class="block text-sm font-semibold text-gray-200">Harga</label>
        <input type="number" name="harga" id="harga" value="{{ old('harga', $product->harga) }}"
               class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-indigo-400 focus:ring-indigo-400 sm:text-sm">
    </div>

    <!-- Stok -->
    <div class="mb-4">
        <label for="stok" class="block text-sm font-semibold text-gray-200">Stok</label>
        <input type="number" name="stok" id="stok" value="{{ old('stok', $product->stok) }}"
               class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-indigo-400 focus:ring-indigo-400 sm:text-sm">
    </div>

    <!-- Deskripsi -->
    <div class="mb-4">
        <label for="deskripsi" class="block text-sm font-semibold text-gray-200">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" rows="4"
                  class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-indigo-400 focus:ring-indigo-400 sm:text-sm">{{ old('deskripsi', $product->deskripsi) }}</textarea>
    </div>

    <!-- Tombol Submit -->
    <button type="submit"
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-semibold transition">
        Simpan Perubahan
    </button>
</form>
