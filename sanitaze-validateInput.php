<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
  <body>  
    <form action="index.php" method="post">
        <label>Username :</label>
        <input type="text" name="username"> <br>
        <label>Age :</label>
        <input type="text" name="age"> <br>
        <label>Email :</label>
        <input type="text" name="email"> <br>
        <input type="submit" name="login" value="login">
    </form>
  </body>
</html>

<?php
  if(isset($_POST["login"])) {

    // Filter Kararter aneh seperti simbol
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Hello {$username}";

    // Hanya mengambil bilangan/numbernya saja, selain itu tidak
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    echo "Umur Kamu {$age}";

    $age = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo "Email kamu {$email}";

    // Hanya mengecek bilangan/number saja saja
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    // Hanya mengecek email saja
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  }
?>
