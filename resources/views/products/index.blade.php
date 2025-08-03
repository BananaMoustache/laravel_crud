<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-200">📦 Daftar Produk</h2>
    </x-slot>

    <div class="mt-6 max-w-5xl mx-auto bg-gray-900 p-6 rounded-xl shadow-md text-white">
        @if(session('success'))
            <div class="mb-4 bg-green-100 text-green-800 px-4 py-3 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-end mb-4">
            <a href="{{ route('products.create') }}"
               class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-xl shadow transition text-sm font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Tambah Produk
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-xl overflow-hidden text-sm">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-left">Nama</th>
                        <th class="py-3 px-4 text-left">Harga</th>
                        <th class="py-3 px-4 text-left">Stok</th>
                        <th class="py-3 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($products as $p)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 text-gray-800">{{ $p->nama }}</td>
                            <td class="py-3 px-4 text-gray-800">Rp{{ number_format($p->harga, 0, ',', '.') }}</td>
                            <td class="py-3 px-4 text-gray-800">{{ $p->stok }}</td>
                            <td class="py-3 px-4 flex gap-2">
                                <a href="{{ route('products.edit', $p) }}"
                                   class="inline-flex items-center gap-1 bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1.5 rounded-lg text-xs font-semibold transition shadow">
                                    ✏️ Edit
                                </a>
                                <form action="{{ route('products.destroy', $p) }}" method="POST" class="inline"
                                      onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center gap-1 bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded-lg text-xs font-semibold transition shadow">
                                        🗑️ Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    @if($products->count() === 0)
                        <tr>
                            <td colspan="4" class="py-4 px-4 text-center text-gray-500">Belum ada produk.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
