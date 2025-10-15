<?php
  $db_server = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "db_test";
  $koneksi = "";

  // Gunakan exception handling
  try {
      /*
          Variebale ini dikenal sebagai object
      */
      $koneksi = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
  } catch (mysqli_sql_exception) {
    echo "Koneksi tidak berhasil";
  }

  if($koneksi) {
    echo "Koneksi Berhasil";
  }
?>
