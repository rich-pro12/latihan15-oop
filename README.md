# latihan15-Pemrograman Orientasi Objek 
### Richie Pranata
### 312410451
### TI.24.A.5

# 📚 Aplikasi Daftar Buku (Latihan 15 – UAS)

Aplikasi Daftar Buku adalah aplikasi berbasis web yang dikembangkan menggunakan **PHP Native** dan **MySQL**.  
Aplikasi ini dibuat untuk mengelola data buku, kategori, pengarang, dan penerbit, serta dilengkapi dengan sistem login administrator.

Aplikasi ini dibuat sebagai **pemenuhan tugas UAS / Latihan 15** pada mata kuliah **Pemrograman Berorientasi Objek (PBO)**.

---

## 🎯 Tujuan Pembuatan
- Menerapkan konsep dasar pemrograman **PHP dan MySQL**
- Memahami struktur aplikasi web sederhana
- Mengimplementasikan **CRUD (Create, Read, Update, Delete)**
- Menggunakan **session** untuk sistem login
- Menerapkan routing sederhana menggunakan parameter URL

---

## 🛠️ Teknologi yang Digunakan
- PHP Native
- MySQL
- XAMPP (Apache & MySQL)
- Visual Studio Code
- phpMyAdmin

---

## 📂 Struktur Folder Project
latihan15/
│
├── index.php
├── includes/
│ ├── config.php
│ └── nav.php
│
├── public/
│ ├── home.php
│ ├── about.php
│ ├── contact.php
│ └── login.php
│
├── pages/
│ ├── dashboard.php
│ ├── logout.php
│ ├── kelola_kategori.php
│ └── form_kategori.php
│
└── uploads/



---

## 🗄️ Database
**Nama Database:** `db_latihan15`

**Tabel yang Digunakan:**
- `tbl_user`
- `tbl_kategori`
- `tbl_pengarang`
- `tbl_penerbit`
- `tbl_buku`

Database digunakan untuk menyimpan data pengguna dan data buku yang dikelola oleh administrator.

---

## 🔐 Akun Login Administrator
Gunakan akun berikut untuk masuk ke sistem:

Username : admin
Password : admin

---

## ▶️ Cara Menjalankan Aplikasi
1. Jalankan **XAMPP**
2. Aktifkan **Apache** dan **MySQL**
3. Simpan folder project ke dalam direktori:
C:\xampp\htdocs\latihan15
4. Import database melalui **phpMyAdmin**
5. Buka browser dan akses:
http://localhost/latihan15

---

## 📌 Fitur Aplikasi
- Halaman Beranda
- Halaman Tentang Kami
- Halaman Kontak
- Login Administrator
- Dashboard Admin
- Kelola Data Kategori Buku
- Logout

---

## 📖 Penjelasan Singkat Sistem
Aplikasi ini menggunakan file `index.php` sebagai **front controller**, yang berfungsi untuk mengatur pemanggilan halaman berdasarkan parameter `page` pada URL.  
Dengan metode ini, struktur kode menjadi lebih terorganisir dan mudah dikembangkan.

---

## ✅ Kesimpulan
Aplikasi Daftar Buku ini dirancang untuk membantu memahami dasar pengembangan aplikasi web menggunakan PHP dan MySQL, khususnya dalam pengelolaan data dan sistem autentikasi sederhana.

Aplikasi ini dapat dikembangkan lebih lanjut dengan menambahkan fitur pengelolaan buku, pengarang, penerbit, serta peningkatan keamanan login.

---

✍️ **Dibuat untuk keperluan UAS / Latihan 15**
