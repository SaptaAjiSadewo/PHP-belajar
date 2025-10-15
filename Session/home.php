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
    <form action="home.php" method="post">
      <input type="submit" name="logout" value="logout"> 
    </form>
  </body>
</html>

<?php
  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["password"] . "<br>";

if (isset($_POST["logout"])) {
  session_destroy();
  header("Location: index.php");
}
?>

