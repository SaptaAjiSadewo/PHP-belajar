<?php
  include("database.php");

  $username = "Botol";
  $password = "admin2";
  $hashed_password = ($password, PASSWORD_DEFAULT);

  // Menyimpan Query SQL di dalam variabel $sql
  $sql = "INSERT INTO users (user, password)
          VALUES ('$username', '$hashed_password')";
          //VALUES ('Sapta', 'admin')";

try {  
/*
    Gunakan mysqli_query untuk mengirimkan query
    Argumen Pertama adalah Koneksi Database
    Argumen Kedua adalah Query SQL
  */
  mysqli_query($koneksi, $sql);
  echo "User sekarang sudah register";
} 
catch (mysqli_sql_exception) {
  echo "Tidak bisa melakukan register"
}

  mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
  <body>
    <h1> Hello </h1>
  </body>
</html>
