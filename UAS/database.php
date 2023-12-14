<?php

//koneksi ke database
isset($_POST["nama"] ) ? $_POST["nama"]: '';
$servername = "localhost";
$username = "root";
$password = "";
$database = "pemweb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}


//input data ke database
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama = $_POST["nama"];
  $nim = $_POST["nim"];
  $prodi = $_POST["prodi"];
  $jenisKelamin = $_POST["jenisKelamin"];
  $status = isset($_POST["status"]) ? $_POST["status"] : "Tidak Aktif";;
}

//validasi data sebelum input data
if (isset($jenisKelamin) == true && isset($nim) == true){
  $query = "INSERT INTO mahasiswa (nama, nim, prodi, jenisKelamin, status)
  VALUES ('$nama', '$nim', '$prodi', '$jenisKelamin','$status')";
 
 mysqli_query($conn, $query);
}
?>