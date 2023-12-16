# UAS_Pemweb

Ujian Akhir Semester - Mata Kuliah Pemrograman
UAS Pemrograman Web ini terdiri dari empat bagian yang mencakup berbagai aspek pengembangan sebuah web. Keempat bagian saling berkaitan dan akan bersinergi membentuk sebuah aplikasi web. Berikut adalah panduan untuk ujian ini:

Waktu	:	Batas waktu pengerjaan Senin, 18 Desember 2023 Pukul 09.00 WIB
Pertanyaan	:	Bacalah setiap pertanyaan dengan teliti dan kerjakan dengan cermat
Kerja Mandiri	:	Plagiarisme akan mengakibatkan sanksi nilai E pada akhir perkuliahan
Github	:	Penamaan username github harus mengandung nama dan nim
Penjelasan	:	Buatlah file `readme.md` untuk menjelaskan setaip bagian kriteria penilaian
Pengumpulan	:	Dikumpul pada gform: klik disini

Kata-kata motivasi: Pekerjaan yang paling mudah adalah yang tidak dikerjakan. Selamat mengerjakan!

Bagian 1: Client-side Programming (Bobot: 30%)
1.1 (15%) Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM.

Panduan:
- Buat form input dengan minimal 4 elemen input (teks, checkbox, radio, dll.)
- Menampilkan data dari server kedalam sebuah halaman menggunakan tag `table`
1.2 (15%) Buatlah beberapa event untuk menghandle interaksi pada halaman web

Panduan:
- Tambahkan minimal 3 event yang berbeda untuk menghandle form pada 1.1
- Implementasikan JavaScript untuk validasi setiap input sebelum diproses oleh PHP
Bagian 2: Server-side Programming (Bobot: 30%)
2.1 (20%) Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar.

Panduan:
- Gunakan metode POST atau GET pada formulir.
- Parsing data dari variabel global dan lakukan validasi disisi server
- Simpan ke basisdata termasuk jenis browser dan alamat IP pengguna
2.2 (10%) Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda.

Panduan:
- Objek yang dibuat harus terkait dengan konteks pengembangan web saat ini.

Bagian 3: Database Management (Bobot: 20%)
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

3.3 (10%) Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data.

Panduan:
- Gunakan query SQL yang sesuai dengan skenario yang diberikan.

Bagian 4: State Management (Bobot: 20%)
4.1 (10%) Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session.

Panduan:
- Gunakan `session_start()` untuk memulai session.
- Simpan informasi pengguna ke dalam session.

4.2 (10%) Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript.

Panduan:
- Buat fungsi-fungsi untuk menetapkan, mendapatkan, dan menghapus cookie.
- Gunakan browser storage untuk menyimpan informasi secara lokal.

Bagian Bonus: Hosting Aplikasi Web (Bobot: 20%)
Bagian bonus ini akan memberikan bobot tambahan 20% jika Anda berhasil meng-host aplikasi web yang Anda buat. Jawablah pertanyaan-pertanyaan berikut:

(5%) Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
(5%) Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
(5%) Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
(5%) Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
Catatan:
- Ujian ini dirancang untuk menguji pemahaman dan keterampilan Anda dalam pengembangan web di sisi klien dan server.
- Pertimbangkan untuk memberikan komentar pada kode Anda untuk menjelaskan langkah-langkah atau alasan tertentu.
- Pastikan kode Anda bersih, terstruktur, dan mudah dimengerti.
