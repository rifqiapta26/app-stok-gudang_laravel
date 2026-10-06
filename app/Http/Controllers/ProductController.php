<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Menampilkan daftar seluruh produk.
     */
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        return view('products.index', compact('products'));
    }

    /**
     * Menampilkan formulir untuk membuat produk baru.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Menyimpan data produk baru ke dalam basis data.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'kode_barang' => 'required|string|max:50|unique:products,kode_barang',
            'nama_barang' => 'required|string|max:100',
            'deskripsi'   => 'nullable|string',
            'stok'        => 'required|integer|min:0',
            'harga'       => 'required|numeric|min:0',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Data produk berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail produk berdasarkan ID.
     */
    public function show(string $id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Menampilkan formulir untuk mengedit data produk.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Memperbarui data produk yang sudah ada di dalam basis data.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'kode_barang' => 'required|string|max:50|unique:products,kode_barang,' . $product->id,
            'nama_barang' => 'required|string|max:100',
            'deskripsi'   => 'nullable|string',
            'stok'        => 'required|integer|min:0',
            'harga'       => 'required|numeric|min:0',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')
            ->with('success', 'Data produk berhasil diperbarui.');
    }

    /**
     * Menghapus data produk dari basis data.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Data produk berhasil dihapus.');
    }
}
