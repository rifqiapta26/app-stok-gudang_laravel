@extends('layouts.app')
@section('title', 'Data Kategori')
@section('page-title', 'Data Kategori')

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-xl font-semibold text-gray-800">Data Kategori</h3>
        <a href="{{ route('categories.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded shadow transition">+ Tambah Kategori</a>
    </div>
    <table class="min-w-full divide-y divide-gray-200 border">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">No</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Nama Kategori</th>
                <th class="px-4 py-3 text-center text-xs font-semibold text-gray-600 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($categories as $cat)
                <tr>
                    <td class="px-4 py-3 text-sm">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3 text-sm">{{ $cat->nama_kategori }}</td>
                    <td class="px-4 py-3 text-center whitespace-nowrap">
                        <a href="{{ route('categories.edit', $cat->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-medium px-3 py-1 rounded mr-1">Edit</a>
                        <form action="{{ route('categories.destroy', $cat->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin hapus kategori ini?');">
                            @csrf @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-xs font-medium px-3 py-1 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3" class="px-4 py-6 text-center text-gray-500">Belum ada data kategori.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection