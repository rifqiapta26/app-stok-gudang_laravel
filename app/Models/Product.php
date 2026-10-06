<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    /**
     * Nama tabel basis data yang digunakan oleh model.
     */
    protected $table = 'products';
    /**
     * Atribut yang dapat diisi secara massal (mass assignable).
     */
    protected $fillable = [
        'category_id',
        'kode_barang',
        'nama_barang',
        'deskripsi',
        'stok',
        'harga',
    ];
    /**
     * Casting tipe data untuk kolom tertentu agar otomatis dikonversi.
     */
    protected $casts = [
        'stok'   => 'integer',
        'harga'  => 'decimal:2',
    ];

    /**
     * Relasi: Satu produk dimiliki oleh satu kategori (belongsTo).
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
