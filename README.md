# 🛒 Cashed - Sistem Point of Sales (POS)

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

**Cashed** adalah aplikasi sistem kasir (Point of Sales) berbasis web yang dibangun menggunakan framework Laravel 11. Aplikasi ini dirancang untuk memudahkan manajemen produk, kategori, pengguna, serta pemrosesan transaksi pesanan (order) secara efisien.

## ✨ Fitur Utama

Berikut adalah fitur-fitur unggulan yang tersedia dalam aplikasi:

-   🔐 **Otentikasi Aman**: Sistem login dan logout yang aman untuk administrator dan pengguna.
-   📊 **Dashboard Interaktif**: Halaman utama untuk memantau ringkasan aktivitas.
-   📦 **Manajemen Produk & Kategori**:
    -   Kelola data produk (Tambah, Edit, Hapus).
    -   Kelola kategori produk.
-   👥 **Manajemen Pengguna (User)**: Pengelolaan akun pengguna yang memiliki akses ke sistem.
-   🛒 **Transaksi & Pesanan**:
    -   Pembuatan pesanan baru (*Create Order*).
    -   Detail pesanan per produk (*Order Details*).
    -   Proses **Checkout** yang mudah.
    -   Riwayat pesanan (*Order History*).

## 🛠️ Prasyarat Sistem

Sebelum memulai, pastikan server atau lingkungan lokal Anda memenuhi persyaratan berikut:

-   **PHP**: Versi 8.2 atau lebih baru.
-   **Composer**: Untuk manajemen dependensi PHP.
-   **Database**: MySQL/MariaDB.

## 🚀 Panduan Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal Anda:

1.  **Clone Repositori**
    ```bash
    git clone [https://github.com/username/cashed.git](https://github.com/username/cashed.git)
    cd cashed
    ```

2.  **Instal Dependensi**
    Jalankan perintah berikut untuk mengunduh semua library yang dibutuhkan.
    ```bash
    composer install
    ```

3.  **Konfigurasi Environment**
    Salin file contoh konfigurasi dan buat file `.env` baru.
    ```bash
    cp .env.example .env
    ```
    Buka file `.env` dan sesuaikan konfigurasi database Anda:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=cashed
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4.  **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

5.  **Migrasi Database & Seeding**
    Jalankan migrasi untuk membuat tabel dan mengisi data awal (termasuk akun admin default).
    ```bash
    php artisan migrate --seed
    ```

6.  **Jalankan Server Lokal**
    ```bash
    php artisan serve
    ```
    Akses aplikasi melalui browser di `http://localhost:8000`.

## 👤 Akun Demo (Default)

Setelah melakukan *seeding* database, Anda dapat masuk menggunakan akun administrator berikut:

| Role | Email | Password |
| :--- | :--- | :--- |
| **Admin** | `admin@example.com` | `password` |

> ⚠️ **Catatan:** Harap segera ganti password setelah berhasil login untuk alasan keamanan.

## 📂 Struktur Proyek

-   `app/Http/Controllers`: Berisi logika aplikasi (AuthController, ProductController, OrderController, dll).
-   `routes/web.php`: Definisi rute aplikasi web.
-   `database/migrations`: Struktur tabel database.
-   `database/seeders`: Data awal untuk pengujian.

## 🤝 Kontribusi

Kontribusi selalu diterima! Silakan buat *Pull Request* atau laporkan masalah melalui *Issues*.

## 📄 Lisensi

Aplikasi ini bersifat open-source dan dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).
