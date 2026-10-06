@extends('layouts.app')
@section('title', 'Edit Kategori')
@section('page-title', 'Edit Kategori')

@section('content')
<div class="bg-white rounded-lg shadow p-6 max-w-xl">
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf @method('PUT')
        <div>
            <label class="block text-sm font-medium text-gray-700">Nama Kategori</label>
            <input type="text" name="nama_kategori" value="{{ old('nama_kategori', $category->nama_kategori) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border" required>
            @error('nama_kategori') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div class="mt-6 flex gap-3">
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('categories.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">Batal</a>
        </div>
    </form>
</div>
@endsection