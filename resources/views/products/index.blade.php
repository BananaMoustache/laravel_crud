<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-100">Daftar Produk</h2>
    </x-slot>

    <div class="mt-6 max-w-5xl mx-auto bg-gray-800 p-6 rounded-xl shadow-lg text-white">
        @if(session('success'))
            <div class="mb-4 bg-green-500/10 text-green-400 px-4 py-3 rounded-md border border-green-500/20">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-end mb-4">
            <a href="{{ route('products.create') }}"
               class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-xl shadow transition text-sm font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Tambah Produk
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-700 rounded-xl overflow-hidden text-sm text-white">
                <thead class="bg-gray-600 text-gray-200">
                    <tr>
                        <th class="py-3 px-4 text-left">Nama</th>
                        <th class="py-3 px-4 text-left">Harga</th>
                        <th class="py-3 px-4 text-left">Stok</th>
                        <th class="py-3 px-4 text-left">Deskripsi</th>
                        <th class="py-3 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-600">
                    @foreach ($products as $p)
                        <tr class="hover:bg-gray-600">
                            <td class="py-3 px-4 text-white">{{ $p->nama }}</td>
                            <td class="py-3 px-4 text-white">Rp{{ number_format($p->harga, 0, ',', '.') }}</td>
                            <td class="py-3 px-4 text-white">{{ $p->stok }}</td>
                            <td class="py-3 px-4 text-white">{{ \Illuminate\Support\Str::limit($p->deskripsi, 50) }}</td>
                            <td class="py-3 px-4 flex gap-2">
                                <a href="{{ route('products.edit', $p) }}"
                                   class="inline-flex items-center gap-1 bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1.5 rounded-lg text-xs font-semibold transition shadow">
                                    Edit
                                </a>
                                <form action="{{ route('products.destroy', $p) }}" method="POST" class="inline"
                                      onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center gap-1 bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded-lg text-xs font-semibold transition shadow">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    @if($products->count() === 0)
                        <tr>
                            <td colspan="5" class="py-4 px-4 text-center text-gray-400">Belum ada produk.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
