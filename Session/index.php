<?php
/*
  Session Super Global Variable yang digunakan untuk menyimpan informasi dari user untuk digunakan 
  di beberapa halaman lainnya.
  User akan memasukkan session-id
  seperti login-credentials
*/

// Membuat session
  session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
  <body>
    Ini adalah Halaman Login
    <a href="home.php">Ini akan menuju ke Halaman Login</a>
  </body>
</html>

<?php
  $_SESSION["username"] = "Sapta";
  $_SESSION["password"] = "admin";

  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["password"] . "<br>";
?>

