@extends('layouts.app')

@section('title', 'Stok Barang')
@section('page-title', 'Daftar Stok Barang')

@section('content')
    <div class="bg-white rounded-lg shadow p-6">

        {{-- Header & Tombol Tambah Data --}}
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Data Stok Barang</h3>
            <a href="{{ route('products.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded shadow transition">
                + Tambah Barang
            </a>
        </div>

        {{-- Tabel Daftar Produk --}}
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 border">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">No</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Kode Barang</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Barang</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Kategori</th>
                        <th class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Stok</th>
                        <th class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Harga</th>
                        <th class="px-4 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($products as $product)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3 text-sm font-mono text-gray-800">{{ $product->kode_barang }}</td>
                            <td class="px-4 py-3 text-sm text-gray-800">{{ $product->nama_barang }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">
                                <span class="inline-block bg-slate-100 text-slate-700 text-xs px-2 py-1 rounded">
                                    {{ $product->category->nama_kategori ?? '-' }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm text-right text-gray-800">
                                {{ number_format($product->stok, 0, ',', '.') }}
                            </td>
                            <td class="px-4 py-3 text-sm text-right text-gray-800">
                                Rp {{ number_format($product->harga, 2, ',', '.') }}
                            </td>
                            <td class="px-4 py-3 text-sm text-center whitespace-nowrap">
                                {{-- Tombol Edit --}}
                                <a href="{{ route('products.edit', $product->id) }}"
                                   class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-medium px-3 py-1 rounded mr-1 transition">
                                    Edit
                                </a>

                                {{-- Tombol Hapus (Form DELETE) --}}
                                <form action="{{ route('products.destroy', $product->id) }}"
                                      method="POST"
                                      class="inline-block"
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang {{ $product->nama_barang }}?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white text-xs font-medium px-3 py-1 rounded transition">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-6 text-center text-sm text-gray-500">
                                Belum ada data barang yang tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
