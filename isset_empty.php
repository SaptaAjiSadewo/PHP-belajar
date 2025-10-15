<?php
/*
  isset() = Mengembalikkan True jika variabel sudah dideklarasi/dibuat dan tidak berisi null
  empty() = Mengembalikkan True jika variabel belum dideklarasi/dibuat dan berisi null, false, ""
*/

$username = "Sapta";
echo isset($username); // 1 true

$username = null;
echo isset($username); // 0 false

if isset($username){
  echo "Variabel ini sudah dibuat";
}
else {
  echo "Variabel ini belum dibuat"; 
}


$username = null;
$username = false;
$username = "";

if empty($username){
  echo "Variabel ini kosong";
}
else {
  echo "Variabel ini tidak kosong"; 
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
  <body>
    <form action="index.php" method="post">
      <label>username :</label>
        <input type="text" name="username"> <br>
      <label>password :</label>
        <input type="password" name="password"> <br>
      <input type="submit" name="login" value="Log In"> <br>
    </form>
  </body>
</html>

<?php

/* debugging
  foreach($_POST as $key => $value){
    echo "{$key} = {$value} <br>"; 
  }
*/

if(isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  if(empty($username)) {
    echo "Username is Missing";
  }
  elseif(empty($password)) {
    echo "Password is Missing";
  }
  else {
    echo "Hello {$username}";
  }
}

?>
