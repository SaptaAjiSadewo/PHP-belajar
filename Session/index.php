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
    <form action="index.php" method="post">
      <label>Username :</label>
      <input type="text" name="username">
      <label>Password :</label>
      <input type="password" name="password">
      <input type="submit" name="login" value="login">
    </form>
  </body>
</html>

<?php

if(isset[$_POST["login"]])

  if(!empty($_POST["username"]) && !empty($_POST["password"]) ){
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["password"] = $_POST["password"];

      header("Location: home.php");

      //echo $_SESSION["username"] . "<br>";
      //echo $_SESSION["password"] . "<br>";
  } else {
      echo "Missing Username/Password";
  }
    
?>

