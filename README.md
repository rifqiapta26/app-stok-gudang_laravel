


# 📦✨ App Stok Gudang Laravel ✨📦
> *Karena barang hilang bukan sihir, tapi kelalaian admin yang lupa mencatat!* 👻

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

---

## 📖 Deskripsi & Latar Belakang

Pernah nggak sih, kamu bertanya-tanya ke mana perginya 50 dus mie instan di gudang? Apakah dimakan tikus? Apakah dicuri alien? Atau jangan-jangan, admin gudang lagi "lupa" mencatatnya di buku tulis yang sudah lecek dan penuh noda kopi? ☕

Tenang, **App Stok Gudang Laravel** hadir sebagai pahlawan bertopi super (tanpa jubah) untuk menyelamatkan bisnis kamu dari drama *"stok di sistem beda dengan stok di rak"*. Aplikasi ini dibangun dengan Laravel 10, dirancang khusus untuk mengelola kategori dan produk dengan antarmuka yang bersih, logika yang waras, dan zero drama.



## 🚀 Fitur Utama

1. **📦 Manajemen Produk (CRUD)**  
   Tambah, lihat, edit, dan hapus produk dengan mudah. Lengkap dengan kode barang, nama, deskripsi, stok, dan harga.  
   *Spoiler: Fitur "hapus" tidak akan menghapus kenangan mantan, tapi bisa menghapus data barang yang salah input.*

2. **🏷️ Kategori Barang**  
   Kelompokkan barang agar rapi. Biar nggak ada lagi cerita baut dan biskuit disimpan di rak database yang sama.

3. **📊 Dashboard Ringkas**  
   Halaman utama yang langsung menyapa. Tidak ada grafik rumit yang bikin pusing, hanya informasi penting yang benar-benar kamu butuhkan.

4. **🛡️ Validasi Data Ketat**  
   Form tidak akan menerima input seperti `stok: -5` atau `harga: gratis`. Sistem ini lebih tegas daripada orang tua kamu soal jam malam.

5. **🎨 UI Blade yang Estetik**  
   Tampilan bersih dengan layout yang konsisten. Mata admin gudang pasti berterima kasih karena tidak perlu menatap layar yang berantakan.

---

## 🛠️ Cara Instalasi (Langkah-demi-Langkah Super Clean)

Ikuti langkah ini dengan saksama. Jangan di-skip, nanti error-nya nangis di terminal. 😭

### 1. Clone Repositori
```bash
git clone https://github.com/rifqiapta26/app-stok-gudang_laravel.git
cd app-stok-gudang_laravel
```

### 2. Install Dependensi
Biarkan Composer bekerja keras sementara kamu membuat kopi. ☕
```bash
composer install
npm install && npm run build
```
*(Catatan: Langkah npm opsional jika Anda tidak memodifikasi aset frontend secara khusus)*

### 3. Konfigurasi Environment
Duplikat file `.env.example` menjadi `.env`, lalu sesuaikan konfigurasi database Anda (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Migrasi & Seeder
Buat tabel di database. Tenang, ini tidak akan memakan data lama kamu (kecuali kamu memang ingin mereset semuanya).
```bash
php artisan migrate --seed
```

### 5. Jalankan Aplikasi
Saatnya melihat hasil kerja kerasmu! 🎉
```bash
php artisan serve
```
Buka browser dan kunjungi: **[http://127.0.0.1:8000/](http://127.0.0.1:8000/)**

---

## 👤 Akun Demo Bawaan

> 💡 **Catatan Penting:** Saat ini file `DatabaseSeeder.php` masih dalam mode "polos" (default Laravel). Namun, jika Anda telah menambahkan seeder kustom, berikut adalah format akun demo yang direkomendasikan untuk ditampilkan:
> 
> - **Email**: `admin@gudang.com`  
> - **Password**: `password123`  
> 
> *(Jangan pakai password ini untuk akun produksi asli, ya. Nanti diretas hacker yang lagi iseng!)*

---

## 📸 Screenshot Aplikasi

<img width="450"  alt="image" src="https://github.com/user-attachments/assets/45a36a11-84dd-4938-abc9-ae01d5db418f" />
<img width="450"  alt="image" src="https://github.com/user-attachments/assets/d2313a2e-602e-47e0-9c3d-0733880ca5c4" />
<img width="450" alt="image" src="https://github.com/user-attachments/assets/86e1ccf2-c3f3-49d1-af89-83611580333c" />


**🛠️ Under Construction:** Aplikasi ini masih dirawat dengan penuh kasih sayang di laboratorium pengembangan. Jika visualnya belum se-glowing ekspektasi Anda, tenang saja, tim kami sedang bekerja keras di balik layar demi estetika yang hakiki! Hari ini fungsional, besok fenomenal. 😉

---

## 🤝 Kontribusi

Punya ide fitur baru? Atau menemukan bug yang lebih aneh daripada perilaku kucing jam 3 pagi? 🐈  
Jangan ragu untuk membuka **Issue** atau kirim **Pull Request**. Mari kita buat aplikasi ini semakin solid bersama-sama!

---

## 📜 Lisensi

Proyek ini dilisensikan di bawah **MIT License**. Artinya, kamu bebas menggunakannya, memodifikasinya, dan bahkan memamerkannya ke bos kamu (sebagai karya kamu sendiri, hehe... bercanda, tetap hargai open source ya! 😉).



<p align="center"><i>Dibuat dengan ❤️ dan sedikit ☕ oleh <a href="https://github.com/rifqiapta26/">rifqiapta26</a></i></p>







