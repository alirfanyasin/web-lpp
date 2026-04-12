# 🏛️ Lapas — Sistem Informasi Lembaga Pemasyarakatan

Aplikasi web berbasis **Laravel 13** untuk manajemen data lembaga pemasyarakatan, meliputi data kunjungan, warga binaan, dan laporan.

---

## 📋 Persyaratan

Pastikan software berikut sudah terinstall di komputermu sebelum memulai:

| Software | Versi Minimum | Download |
|---|---|---|
| **PHP** | `^8.3` | [php.net](https://www.php.net/downloads) |
| **Composer** | `^2.x` | [getcomposer.org](https://getcomposer.org/download) |
| **Node.js** | `^18.x` (LTS) | [nodejs.org](https://nodejs.org) |
| **NPM** | `^9.x` (ikut Node.js) | — |
| **Git** | Latest | [git-scm.com](https://git-scm.com/downloads) |

> **Catatan:** Project ini menggunakan **SQLite** sebagai database secara default, sehingga kamu **tidak perlu** menginstall MySQL atau PostgreSQL.

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
3. Ekstrak file ZIP
4. Buka terminal dan masuk ke folder hasil ekstrak

---

## ⚙️ Setup & Menjalankan Project

Ikuti langkah-langkah berikut setelah project berhasil di-clone atau di-download.

### Langkah 1 — Install Dependency PHP

```bash
composer install
```

### Langkah 2 — Buat File Konfigurasi `.env`

```bash
cp .env.example .env
```

> Untuk Windows (Command Prompt):
> ```cmd
> copy .env.example .env
> ```

### Langkah 3 — Generate Application Key

```bash
php artisan key:generate
```

### Langkah 4 — Setup Database

Project ini menggunakan **SQLite**, jadi hanya perlu membuat file database-nya:

```bash
# Buat file database SQLite
touch database/database.sqlite
```

> Untuk Windows (PowerShell):
> ```powershell
> New-Item -ItemType File database/database.sqlite
> ```

Lalu jalankan migrasi untuk membuat tabel:

```bash
php artisan migrate
```

Jika ingin mengisi data awal (seeder):

```bash
php artisan db:seed
```

### Langkah 5 — Install Dependency Node.js

```bash
npm install
```

### Langkah 6 — Jalankan Development Server

Jalankan semua service sekaligus dengan satu perintah:

```bash
composer dev
```

Perintah ini akan menjalankan:
- **Laravel server** → `http://localhost:8000`
- **Vite (hot reload)** → untuk asset frontend
- **Queue worker** → untuk background jobs
- **Log watcher** → untuk monitoring log

---

## 🌐 Akses Aplikasi

Setelah semua service berjalan, buka browser dan akses:

```
http://localhost:8000
```

---

## 🛠️ Perintah Berguna Lainnya

| Perintah | Fungsi |
|---|---|
| `php artisan migrate:fresh --seed` | Reset database + isi ulang data |
| `php artisan route:list` | Lihat semua route yang terdaftar |
| `php artisan tinker` | Buka REPL interaktif Laravel |
| `npm run build` | Build asset untuk production |
| `composer test` | Jalankan semua unit test |

---

## ❓ Troubleshooting

**Error: `No application encryption key has been specified`**
→ Jalankan `php artisan key:generate`

**Error: `database/database.sqlite does not exist`**
→ Buat file SQLite-nya: `touch database/database.sqlite` (Linux/Mac) atau `New-Item -ItemType File database/database.sqlite` (Windows PowerShell)

**Error: `npm: command not found`**
→ Pastikan Node.js sudah terinstall dan coba restart terminal

**CSS/JS tidak tampil dengan benar**
→ Jalankan `npm run build` atau pastikan `npm run dev` sedang aktif

---

## 📄 Lisensi

Project ini menggunakan lisensi [MIT](https://opensource.org/licenses/MIT).
