# Website Promo UMKM Desa Gedong Meneng Baru

Website ini dibuat sebagai media **pemaparan dan promosi UMKM** yang ada di **Desa Gedong Meneng Baru**. Tujuannya adalah membantu pelaku usaha lokal agar lebih mudah dikenal oleh masyarakat luas, memperluas jangkauan pelanggan, serta memudahkan pengunjung menemukan informasi produk/jasa UMKM secara cepat dan jelas.

## 🎯 Tujuan Website

- Menampilkan daftar UMKM yang ada di Desa Gedong Meneng Baru
- Menyediakan informasi lengkap UMKM (nama usaha, deskripsi, alamat, kontak, produk)
- Mempermudah promosi UMKM lokal melalui tampilan website yang menarik
- Mendukung digitalisasi UMKM desa

## 📂 Struktur Proyek (Hierarki File)

Proyek ini menggunakan pola arsitektur **MVC (Model-View-Controller)** yang terorganisir berdasarkan fitur:

```text
umkm-gedong-meneng-baru/
├── config/                 # Konfigurasi aplikasi
│   ├── config.php          # Base URL & DB Define
│   └── database.php        # Class koneksi PDO
├── core/                   # Inti sistem (Engine)
│   ├── Controller.php      # Base Controller
│   ├── Helpers.php         # Fungsi pembantu (Auth/Redirect)
│   └── Router.php          # Sistem routing URL
├── features/               # Modul fitur aplikasi
│   ├── admin/              # Fitur Manajemen (Dashboard, CRUD)
│   │   ├── AdminController.php
│   │   ├── AdminModel.php
│   │   └── views/          # Tampilan khusus admin
│   ├── home/               # Fitur Halaman Utama
│   ├── kategori/           # Fitur Kategori UMKM
│   ├── kontak/             # Fitur Informasi Kontak
│   └── umkm/               # Fitur Katalog & Detail UMKM
├── public/                 # File akses publik
│   └── uploads/            # Folder penyimpanan foto UMKM
├── shared/                 # Komponen yang dipakai bersama
│   ├── components/         # Navbar
│   └── layouts/            # Header & Footer
├── .htaccess               # Konfigurasi URL Friendly
├── index.php               # Entry point aplikasi
└── README.md               # Dokumentasi proyek
```

## Fitur Utama

✅ Halaman Beranda (Profil desa & highlight UMKM)  
✅ Halaman Daftar UMKM  
✅ Halaman Detail UMKM (produk/jasa, galeri, deskripsi, kontak)  
✅ Pencarian UMKM berdasarkan kategori atau nama  
✅ Kontak & Lokasi Desa  
✅ Responsive (tampilan menyesuaikan mobile & desktop)


## Struktur Halaman

- **Home** → Informasi singkat desa + UMKM unggulan  
- **UMKM** → Daftar seluruh UMKM  
- **Detail UMKM** → Informasi UMKM terpilih  
- **Kategori** → Filter UMKM berdasarkan jenis usaha  
- **Kontak** → Informasi kontak desa & pengelola website


## Teknologi yang Digunakan

- HTML, CSS, JavaScript
- Bootstrap / TailwindCSS *(opsional)*
- PHP / Laravel *(opsional)*
- MySQL *(opsional, jika pakai database)*
- API Google Maps *(opsional untuk lokasi)*
