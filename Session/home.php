<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
  <body>
    Ini adalah Halaman Home
    <a href="index.php">Ini akan menuju ke Halaman Login</a>
  </body>
</html>

<?php
  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["password"] . "<br>";
?>

