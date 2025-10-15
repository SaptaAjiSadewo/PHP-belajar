<?php
  include("database.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
  <body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <h2>Selamat Datang di Cihuy</h2>
      <label>Username :</label>
      <input type="text" name="username">
      <label>Password :</label>
      <input type="password" name="password">
      <input type="submit" name="submit" value="registrasi">
    </form>
  </body>
</html>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username)){
      echo "Tolong Masukkan Usernamenya";
    } elseif (empty($password)){
      echo "Tolong Masukkan Passwordnya";
    } else {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

      try {
        mysqli_query($koneksi, $sql);
        echo "Selamat sudah Register";
      } 
      catch (mysqli_sql_exception){
        echo "Username sudah diambil";
      }
    }
  }

  mysqli_close($koneksi);
?>
