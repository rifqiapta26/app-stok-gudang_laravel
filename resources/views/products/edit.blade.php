@extends('layouts.app')
@section('title', 'Edit Barang')
@section('page-title', 'Edit Stok Barang')

@section('content')
<div class="bg-white rounded-lg shadow p-6 max-w-3xl">
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border" required>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Kode Barang</label>
                <input type="text" name="kode_barang" value="{{ old('kode_barang', $product->kode_barang) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border" required>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Nama Barang</label>
                <input type="text" name="nama_barang" value="{{ old('nama_barang', $product->nama_barang) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border" required>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border">{{ old('deskripsi', $product->deskripsi) }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Stok</label>
                <input type="number" name="stok" value="{{ old('stok', $product->stok) }}" min="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="number" name="harga" value="{{ old('harga', $product->harga) }}" min="0" step="0.01" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border" required>
            </div>
        </div>
        <div class="mt-6 flex gap-3">
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('products.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">Batal</a>
        </div>
    </form>
</div>
@endsection