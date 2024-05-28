
# Daftar Penipu Tanaman Hias - Laravel
by Nate Nasution a.k.a bhottu


Ini adalah proyek Laravel untuk membuat daftar penipu tanaman hias. Pada dasarnya menggunakan CRUD dan kamu bisa modifikasi sesuai kebutuhan, semisal input data sekolah dll

Proyek ini mencakup fitur-fitur berikut:

- Login & register sebelum submit penipu
- Menampilkan daftar penipu tanaman hias 
- Menambahkan penipu baru
- Mengedit informasi penipu
- Menghapus penipu dari daftar

## Instalasi

1. Clone repositori ini ke dalam direktori lokal Anda:

   ```bash
   git clone https://github.com/bhottu/crud-daftar-penipu-laravel.git
   ```

2. Masuk ke direktori proyek:

   ```bash
   cd nama-direktori-kamu
   ```

3. Install dependencies menggunakan Composer:

   ```bash
   composer install
   ```

4. Salin file `.env.example` menjadi `.env`:

   ```bash
   cp .env.example .env
   ```

5. Generate APP_KEY:

   ```bash
   php artisan key:generate
   ```

6. Atur koneksi database Anda di file `.env`.

7. Migrasi database dan seeding (opsional):

   ```bash
   php artisan migrate --seed
   ```

## Penggunaan

1. Jalankan server Laravel:

   ```bash
   php artisan serve
   ```

2. Buka aplikasi di browser:

   [http://localhost:8000](http://localhost:8000)

3. Untuk login, gunakan akun:

   - Email: tester@gmail.com
   - Password: 12345678

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat _pull request_.

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT.

## Screenshoot

Halaman login
![scrnli_5_28_2024_5-02-10 PM](https://github.com/bhottu/crud-daftar-penipu-laravel/assets/35356275/d9128a50-c781-4fa7-96d3-0e83df9e1e9a)
Halaman register
![scrnli_5_28_2024_5-01-49 PM](https://github.com/bhottu/crud-daftar-penipu-laravel/assets/35356275/5c886b7f-9c52-48f3-8af9-e460321d15c7)
Halaman utama
![scrnli_5_28_2024_5-01-32 PM](https://github.com/bhottu/crud-daftar-penipu-laravel/assets/35356275/52e8a767-f625-4c35-b929-5193227e8fb4)
Admin panel
![scrnli_5_28_2024_5-02-37 PM](https://github.com/bhottu/crud-daftar-penipu-laravel/assets/35356275/b39fcd7f-e46d-4745-9b50-c53180340300)
Halaman Tambah
![scrnli_5_28_2024_5-03-33 PM](https://github.com/bhottu/crud-daftar-penipu-laravel/assets/35356275/046e687c-0962-4a7a-bfc3-74b4448ed5d2)
Halaman Edit
![scrnli_5_28_2024_5-03-18 PM](https://github.com/bhottu/crud-daftar-penipu-laravel/assets/35356275/01467bf5-5695-4f38-b15a-b722c8a8764f)
Halaman Detil
![scrnli_5_28_2024_5-02-57 PM](https://github.com/bhottu/crud-daftar-penipu-laravel/assets/35356275/254b8112-2198-460d-9d31-c2963e0a2775)
Responsive
![scrnli_5_28_2024_5-04-46 PM](https://github.com/bhottu/crud-daftar-penipu-laravel/assets/35356275/6b7ce21c-ddca-4fd7-b87b-dd55e06864e2)


