<?php
  include("database.php");

  // Deklarasi Query dari SQL yang dimasukkan ke dalam variabel $sql
  $sql = "SELECT * FROM users WHERE user = 'Ayam' ";

  // Akan mengembalikan object
  $hasil = mysqli_query($koneksi, $sql);

  if (mysqli_mysqli_num_rows($koneksi) > 0) {
    $row = mysqli_fetch_assoc($hasil); //mengembalikan semua baris yang ada lalu menjadi associative array
      echo $row["id"];
      echo $row["user"];
      echo $row["reg_date"];
  } else {
      echo "Tidak ada User yang ditemukan";
  }



  // Looping/ Menampilkan semuanya
  $sql = "SELECT * FROM users";

  // Akan mengembalikan object
  $hasil = mysqli_query($koneksi, $sql);

  if (mysqli_mysqli_num_rows($koneksi) > 0) {
    while ($row = mysqli_fetch_assoc($hasil)) {
      echo $row["id"];
      echo $row["user"];
      echo $row["reg_date"];
    };
  } 
  else {
      echo "Tidak ada User yang ditemukan";
  }
  
  mysqli_close($koneksi);  
?>
