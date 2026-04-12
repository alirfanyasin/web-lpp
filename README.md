# 🏛️ Lapas — Sistem Informasi Lembaga Pemasyarakatan

Aplikasi web berbasis **Laravel 13** untuk manajemen data lembaga pemasyarakatan, meliputi data kunjungan, warga binaan, dan laporan.

---

## 📋 Persyaratan

Pastikan software berikut sudah terinstall sebelum memulai:

| Software | Versi Minimum | Keterangan |
|---|---|---|
| **Laragon** | `6.0` | Sudah include PHP, MySQL, dan Apache |
| **PHP** | `^8.3` | Sudah include di Laragon |
| **MySQL** | `^8.x` | Sudah include di Laragon |
| **Composer** | `^2.x` | [getcomposer.org](https://getcomposer.org/download) |
| **Node.js** | `^18.x` (LTS) | [nodejs.org](https://nodejs.org) |
| **Git** | Latest | [git-scm.com](https://git-scm.com/downloads) |

> **Rekomendasi:** Gunakan **Laragon** karena sudah menyertakan PHP dan MySQL dalam satu paket, sehingga proses setup jauh lebih mudah. Download di [laragon.org](https://laragon.org/download).

---

## 📥 Clone / Download Project

### Opsi 1 — Clone via Git (Direkomendasikan)

```bash
git clone https://github.com/alirfanyasin/lapas.git
cd lapas
```

### Opsi 2 — Download ZIP

1. Buka halaman repository di GitHub
2. Klik tombol **Code → Download ZIP**
3. Ekstrak file ZIP ke folder yang diinginkan
4. Buka terminal dan masuk ke folder hasil ekstrak

---

## ⚙️ Setup & Menjalankan Project

Ikuti langkah-langkah berikut setelah project berhasil di-clone atau di-download.

### Langkah 1 — Pastikan Laragon Berjalan

Buka **Laragon** dan klik **Start All** untuk menjalankan Apache dan MySQL.

### Langkah 2 — Install Dependency PHP

```bash
composer install
```

### Langkah 3 — Buat File Konfigurasi `.env`

```bash
copy .env.example .env
```

### Langkah 4 — Generate Application Key

```bash
php artisan key:generate
```

### Langkah 5 — Setup Database MySQL

**Buat database baru di MySQL:**

Buka phpMyAdmin di Laragon (klik **Database → phpMyAdmin**), lalu buat database baru dengan nama:

```
db_lapas
```

**Sesuaikan konfigurasi `.env`:**

Buka file `.env` dan pastikan bagian database seperti ini:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_lapas
DB_USERNAME=root
DB_PASSWORD=
```

> Password dikosongkan karena MySQL bawaan Laragon defaultnya tidak menggunakan password.

**Jalankan migrasi untuk membuat tabel:**

```bash
php artisan migrate
```

Jika ingin mengisi data awal (opsional):

```bash
php artisan db:seed
```

### Langkah 6 — Install Dependency Node.js

```bash
npm install
```

### Langkah 7 — Build Asset Frontend

```bash
npm run build
```

### Langkah 8 — Jalankan Server

```bash
php artisan serve
```

---

## 🌐 Akses Aplikasi

Setelah server berjalan, buka browser dan akses:

```
http://localhost:8000
```

---

## 🛠️ Perintah Berguna Lainnya

| Perintah | Fungsi |
|---|---|
| `php artisan migrate:fresh --seed` | Reset database + isi ulang data |
| `php artisan migrate:fresh` | Reset database tanpa seeder |
| `php artisan route:list` | Lihat semua route yang terdaftar |
| `php artisan tinker` | Buka REPL interaktif Laravel |
| `npm run dev` | Jalankan Vite dev server (hot reload) |
| `npm run build` | Build asset untuk production |

---

## ❓ Troubleshooting

**Error: `No application encryption key has been specified`**
→ Jalankan `php artisan key:generate`

**Error: `Access denied for user 'root'@'localhost'`**
→ Pastikan Laragon sudah dijalankan dan MySQL aktif. Cek juga `DB_PASSWORD` di `.env` (biasanya dikosongkan untuk Laragon)

**Error: `Unknown database 'db_lapas'`**
→ Buat dulu database `db_lapas` melalui phpMyAdmin di Laragon

**CSS/JS tidak tampil dengan benar**
→ Jalankan `npm run build` setelah menginstall dependency

**Error: `composer: command not found`**
→ Pastikan Composer sudah terinstall. Cek dengan `composer --version` di terminal

---

## 📄 Lisensi

Project ini menggunakan lisensi [MIT](https://opensource.org/licenses/MIT).
