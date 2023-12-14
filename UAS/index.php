<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="index.css" />
  <title>UAS</title>
</head>
<body>
  
  <h1>Data Mahasiswa</h1>
 
  <!--Form Input Data Mahasiswa-->
  <form id="mahasiswaForm" action="" method="post" onsubmit="return validateForm()">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama"><br><br>
    
    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim"><br><br>
    
    <label for="prodi">Program Studi:</label>
    <input type="text" id="prodi" name="prodi"><br><br>
    
    <label for="jenisKelamin">Jenis Kelamin:</label><br>
    <input type="radio" id="lakiLaki" name="jenisKelamin" value="Laki-laki">
    <label for="lakiLaki">Laki-laki</label><br>
    <input type="radio" id="perempuan" name="jenisKelamin" value="Perempuan">
    <label for="perempuan">Perempuan</label><br><br>
    
    <label for="status">Status: <br></label>
    <input type="checkbox" id="status" name="status" value="Aktif">Aktif<br><br>
    
    <input type="submit" value="Simpan">
    <input type="reset" id="resetButton" value="Reset" onclick="resetForm()">
  </form>

  <h2>Data Mahasiswa dari Server</h2>
  <table id="dataMahasiswa">
    <thead>
      <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Program Studi</th>
        <th>Jenis Kelamin</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      include 'database.php';
      
      $query = "SELECT * FROM mahasiswa";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>" . $row['nama'] . "</td>";
          echo "<td>" . $row['nim'] . "</td>";
          echo "<td>" . $row['prodi'] . "</td>";
          echo "<td>" . $row['jenisKelamin'] . "</td>";
          echo "<td>" . $row['status'] . "</td>";
          echo "</tr>";
        }
      }else {
        echo "<tr><td colspan= '5'> Tidak ada data di database.</td></tr>";
      }
      mysqli_close($conn);
      ?>
    </tbody>
  </table>
  <div id="browserInfo"></div>


   <?php
    session_start();

        //mencari jenis browser
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $browser_type = '';

        if (strpos($user_agent, 'MSIE') !== false || strpos($user_agent, 'Trident') !== false) {
            $browser_type = 'Internet Explorer';
        } elseif (strpos($user_agent, 'Firefox') !== false) {
            $browser_type = 'Mozilla Firefox';
        } elseif (strpos($user_agent, 'Chrome') !== false) {
            $browser_type = 'Google Chrome';
        } elseif (strpos($user_agent, 'Safari') !== false) {
            $browser_type = 'Safari';
        } elseif (strpos($user_agent, 'Opera') !== false || strpos($user_agent, 'OPR') !== false) {
            $browser_type = 'Opera';
        } elseif (strpos($user_agent, 'Edge') !== false) {
            $browser_type = 'Microsoft Edge';
        } else {
            $browser_type = 'Unknown Browser';
        }

        //menyimpan browser type ke local storage
        echo "<script>localStorage.setItem('browser_type', '" . $browser_type . "');</script>";

        //ambil ip address
        $ipaddr = getenv('REMOTE_ADDR');
  ?>
</body>
<script src="index.js"></script>
</html>
