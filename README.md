# UAS_Pemweb

Bagian 1: Client-side Programming (Bobot: 30%)
---------------------------------------------
1.1 (15%) Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM.

Panduan:
- Buat form input dengan minimal 4 elemen input (teks, checkbox, radio, dll.)
  Web ini menggunakan elemen input seperti text, radio, checkbox, dan select
- Menampilkan data dari server kedalam sebuah halaman menggunakan tag `table`
  Tabel sql yang berada pada phpmyadmin sudah berhasil ditampilkan menggunakan php pada tag table dan tr td
  
1.2 (15%) Buatlah beberapa event untuk menghandle interaksi pada halaman web
Panduan:
- Tambahkan minimal 3 event yang berbeda untuk menghandle form pada 1.1
Event Handler yang digunakan pada web ini adalah onclick pada tombol reset yang dapat menghapus semua data pada form, event handler onsubmit yang akan melakukan validasi data form untuk mencegah formulir disubmit dengan data yang tidak lengkap dan juga terdapat validasi setiap input sebelum diproses oleh php

  
Bagian 2: Server-side Programming (Bobot: 30%)
-----------------------------------------------
2.1 (20%) Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar.

Panduan:
- Gunakan metode POST atau GET pada formulir.
  website ini menggunakan metode POST untuk meningkatkan keamanan dari data yang disubmit oleh user agar data tidak ditampilkan di url.
- Parsing data dari variabel global dan lakukan validasi disisi server
  Dengan menggunakan POST pada form maka php dapat menerima data form tersebut dengan memeriksa jika website menggunakan metode POST maka akan mengambil data berdasarkan nama tiap input form dan memasukan data tersebut ke variabel lokal php sebelum dimasukan ke database menggunakan Query sql
- Simpan ke basisdata termasuk jenis browser dan alamat IP pengguna
  web ini dapat menyimpan jenis browser yang digunakan pengguna kedalam local storage
2.2 (10%) Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda.

Panduan:
- Objek yang dibuat harus terkait dengan konteks pengembangan web saat ini.

Bagian 3: Database Management (Bobot: 20%)
---------------------------------------------
3.1 (5%) Buatlah sebuah tabel pada database MySQL


Panduan:
- Lampirkan langkah-langkah dalam membuat basisdata dengan syntax basisdata

  Langkah:
  - Menggunakan query untuk membuat database dengan nama pemweb pada phpmyadmin (CREATE DATABASE pemweb;)
  - Membuat database dengan nama mahasiswa (CREATE TABLE `pemweb`.`mahasiswa` (`nama` VARCHAR(25) NOT NULL , `nim` INT(10) NOT NULL , `prodi` VARCHAR(20) NOT NULL , `jenisKelamin` VARCHAR(20) NOT NULL , `status` VARCHAR(10) NOT NULL ) ENGINE = InnoDB;
  - Menambahkan primary key pada kolom 'nim' (ALTER TABLE `pemweb`.`mahasiswa` ADD PRIMARY KEY (`nim`);

3.2 (5%) Buatlah konfigurasi koneksi ke database MySQL pada file PHP. Pastikan koneksi berhasil dan dapat diakses.

Panduan:
- Gunakan konstanta atau variabel untuk menyimpan informasi koneksi (host, username, password, nama database).
  file database.php mengandung semua variabel yang dapat menyimpan informasi koneksi seperti host, username, password, dan nama database)

3.3 (10%) Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data.

Panduan:
- Gunakan query SQL yang sesuai dengan skenario yang diberikan.
  Pada file database.php terdapat query yang dapat memanipulasi data yang ada pada database phpmyadmin dimana user dapat menambahkan data baru ke database dengan menggunakan query sql yang sesuai.

Bagian 4: State Management (Bobot: 20%)
-------------------------------------------------------------------
4.1 (10%) Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session.

Panduan:
- Gunakan `session_start()` untuk memulai session.
- Simpan informasi pengguna ke dalam session.

4.2 (10%) Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript.

Panduan:
- Buat fungsi-fungsi untuk menetapkan, mendapatkan, dan menghapus cookie.
- Gunakan browser storage untuk menyimpan informasi secara lokal.
  data informasi browser sudah berhasil disimpan pada local storage

Bagian Bonus: Hosting Aplikasi Web (Bobot: 20%)
--------------------------------------------------
Bagian bonus ini akan memberikan bobot tambahan 20% jika Anda berhasil meng-host aplikasi web yang Anda buat. Jawablah pertanyaan-pertanyaan berikut:

(5%) Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
- login/sign up [infinity](https://www.infinityfree.com/)
- Mendaftarkan domain atau subdomain
- Masuk ke control panel
- upload file didalam htdocs ke website
- buat database pada menu MySQLDatabase
- create database dan memasukan nama database yang sesuai
- Inport database kedalam phpmyadmin
- Merubah variabel koneksi pada file database.php dengan menyesuakan data yang ada pada website infinityFree dengan membuka control panel
- website sudah terhubung ke database dan sudah dapat digunakan
(5%) Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
Saya menggunakan InfinityFree dikarenakan proses hosting yang mudah, cepat, sederhana, dan gratis
(5%) Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
- dikarenakan hosting menggunakan jasa yang gratis dan juga database bersifat rentan. salah satu keamanan yang diterapkan pada website ini adalah data form yang dimasukan oleh user dikirim menggunakan metode global POST yang lebih aman dibandingkan GET
(5%) Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
- Server yang digunakan dalam website ini adalah localhost dan phpmyadmin dengan menggunakan detail server seperti dibawah ini
$servername = "localhost";
$username = "root";
$password = "";
$database = "pemweb";

