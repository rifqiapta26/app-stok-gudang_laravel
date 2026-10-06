@extends('layouts.app')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-2xl font-bold text-gray-800">Selamat Datang! 👋</h3>
        <p class="mt-2 text-gray-600">Ini adalah Sistem Informasi Stok Gudang Berbasis Web.</p>
        <p class="mt-1 text-gray-500 text-sm">Silakan gunakan menu di sebelah kiri untuk mengelola Data Kategori dan Stok Barang.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                <p class="text-sm text-blue-700 font-semibold">Total Kategori</p>
                <p class="text-3xl font-bold text-blue-900">{{ \App\Models\Category::count() }}</p>
            </div>
            <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded">
                <p class="text-sm text-green-700 font-semibold">Total Jenis Barang</p>
                <p class="text-3xl font-bold text-green-900">{{ \App\Models\Product::count() }}</p>
            </div>
        </div>
    </div>
@endsection