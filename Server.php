<?php
/*
  $_SERVER adalah Super Global Variable yang berisi headers, jalur, dan Lokasi script.
  Semua disini adalah Array yang dibuat oleh web server.
  Memperlihatkan semuanya yang dibutuhkan tentang web page env. sebelumnya
*/

foreach ($_SERVER as $key => $value) {
  echo "{$key} => {$value} br>";
}

?>

<!-- home.php -->
<form action="<?php htmlspecialchars($_SERVER["SERVER_SELF"]) ?>" method="post">
  <input type="text" name="username">
  <input type="submit">
</form>

<!-- REQUEST METHOD -->
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  echo "Hello post";
}

?>
