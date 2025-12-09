# Sistem Manajemen Kas Sekolah - SMA Negeri 28 Jakarta

Aplikasi web untuk manajemen kas sekolah yang dibuat menggunakan Framework Laravel 11 dan Livewire 3. Dikembangkan sebagai project UAS Pemrograman Web dengan studi kasus SMA Negeri 28 Jakarta.

## Tentang SMA Negeri 28 Jakarta

SMA Negeri 28 Jakarta adalah Sekolah Plus Standar Nasional yang didirikan pada 1 Januari 1970, berlokasi di Pasar Minggu, Jakarta Selatan. Mengusung motto **TAQWA, CERDAS, SANTUN, PRESTASI**, sekolah ini berkomitmen mewujudkan lulusan yang unggul berdasarkan IMTAK dan IPTEK.

Website Resmi: [https://sman28jkt.sch.id/](https://sman28jkt.sch.id/)

## Prasyarat

Berikut beberapa hal yang perlu diinstal terlebih dahulu:

-   Composer (https://getcomposer.org/)
-   PHP ^8.2
-   MySQL 15.x
-   NodeJS ^20.x (https://nodejs.org/)
-   XAMPP (https://www.apachefriends.org/)

Jika Anda menggunakan XAMPP, PHP, dan MySQL sudah menjadi satu paket di dalam aplikasi XAMPP.

## Fitur

-   Homepage modern dengan slider
-   Dark/Light mode toggle
-   Halaman Biodata Sekolah
-   Halaman Sejarah & Visi Misi
-   Halaman Kontak dengan Maps
-   CRUD Pelajar
-   CRUD Kelas
-   CRUD Jurusan
-   Transaksi kas
-   Filter transaksi kas
-   CRUD Administrator
-   Pengaturan Profil

## Preview

Lihat demo langsung di: **[https://laravel.mhaunan.me/](https://laravel.mhaunan.me/)**

### Fitur Utama:
- ✨ Modern homepage dengan hero slider
- 🌓 Dark/Light mode toggle
- 📱 Fully responsive design
- 🏫 Halaman Biodata, Sejarah, dan Kontak SMAN 28 Jakarta
- 💰 Dashboard manajemen kas sekolah
- 👥 CRUD Siswa, Kelas, dan Jurusan
- 📊 Transaksi kas dengan filter

## Langkah-langkah Instalasi

1. Clone repository ini dengan memilih tipe protokol HTTPS atau SSH. Jika belum memiliki setup SSH, bisa menggunakan HTTPS.

**HTTPS:**

```bash
$ git clone https://github.com/Alpiyann/wangkas-template.git
```

**SSH:**

```bash
$ git clone git@github.com:Alpiyann/wangkas-template.git
```

2. Instal seluruh packages yang dibutuhkan.

```bash
$ npm install
```

```bash
$ composer install
```

3. Siapkan database dan atur value pada file `.env` sesuai dengan konfigurasi Anda.

```bash
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

4. Ubah value `APP_NAME=` pada file `.env` menjadi nama aplikasi yang Anda inginkan.

```bash
APP_NAME=
```

5. Ubah value `APP_TIMEZONE=` pada file `.env` menjadi lokasi Timezone Anda.

```bash
APP_TIMEZONE=
```

6. Migrate seluruh migrasi dan seeding data palsu.

```bash
$ php artisan migrate:fresh --seed
```

7. Jalankan local server Laravel.

```bash
$ php artisan serve
```

```bash
INFO  Server running on [http://127.0.0.1:8000].

Press Ctrl+C to stop the server
```

8. Jalankan juga development server untuk NPM.

```bash
$ npm run dev
```

```bash
> dev
> vite


  VITE v5.4.9  ready in 341 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v11.28.1  plugin v1.0.5

  ➜  APP_URL: http://localhost

```

## User default aplikasi untuk login

```bash
Email   : admin@mail.com
Pass    : secret
```

## Dibuat dengan

-   Laravel 11 (https://laravel.com/)
-   Livewire 3 (https://livewire.laravel.com/)
-   Mazer Admin Dashboard (https://github.com/zuramai/mazer)
-   Bootstrap 5 (https://getbootstrap.com/)
-   Swiper.js (https://swiperjs.com/)

## Customized For

-   SMA Negeri 28 Jakarta
-   Custom modern homepage design
-   Dark mode support
-   Responsive layout

## Project Information

-   **Mata Kuliah:** Pemrograman Web
-   **Tugas:** UAS (Ujian Akhir Semester)
-   **Studi Kasus:** SMA Negeri 28 Jakarta
-   **Tahun:** 2025

## Developer

-   [@Alpiyann](https://github.com/Alpiyann)
-   Developed for SMAN 28 Jakarta - 2025
