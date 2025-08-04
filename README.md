# Aplikasi Laravel CRUD Produk

Aplikasi web sederhana untuk mengelola data produk menggunakan Laravel 12.

---

## Fitur

- Register, Login, Logout (Laravel Breeze)
- Tambah, Lihat, Edit, dan Hapus Produk (CRUD)
- UI sederhana (Tailwind CSS + Vite)
---

## Cara Menjalankan Aplikasi

### 1. Clone Repository

```bash
git clone https://github.com/BananaMoustache/laravel_crud
cd laravel_crud
````

### 2. Install Dependency Laravel & NPM

```bash
composer install
npm install
npm run dev
```

> Pastikan terminal `npm run dev` **tetap aktif selama development** agar Vite dapat memuat ulang CSS/JS secara otomatis.

### 3. Konfigurasi Database di `.env`

Contoh:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_produk
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Jalankan Migration

```bash
php artisan migrate
```

### 5. Jalankan Server

```bash
php artisan serve
```

Buka di browser:
`http://127.0.0.1:8000`

---


