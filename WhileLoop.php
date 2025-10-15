<?php
/*
  while loop = Lakukan beberapa kode tak terbatas selama kondisi sebelumnya true/benar 
  bedanya kita tidak perlu 3 statement
  hanya 1 statement

  Cocok untuk sesuatu yang mungkin tak terbatas atau tidaka diketahui
*/

$counter = 0;
while($counter <= 0){
  $counter++
    echo "{$counter} <br>";
}
?>

<!-- Contoh -->
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
  <body>
    <form action="index.php" method="post">
      <input type="submit" name="stop" value="stop">
    </form>
  </body>
</html>


<?php
$waktu = 0;
$berjalan = true;

while ($berjalan) {

  if (isset($_POST["stop"])) {
    $berjalan = false;
  } else {
    //menunggu 1 detik
    $waktu++;
    echo "{$waktu} <br>"; // Ini akan menjalankan infinite loop dimana programnya akan berjalan selamanya
  }
}

?>
