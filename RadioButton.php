<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
  <body>
    <form action="index.php" method="post">
      <input type="radio" name="kartu_kredit" value="Seabank"> Seabank <br>
      <input type="radio" name="kartu_kredit" value="BCA"> BCA <br>
      <input type="radio" name="kartu_kredit" value="BSI"> BSI <br>
      <input type="submit" name="konfirmasi" value="konfirmasi">
    </form>
  </body>
</html>

<?php
if(isset($_POST["konfirmasi"]) {

   if(isset($_POST["kartu_kredit"]) {
       $kartu_kredit = $_POST["kartu_kredit"];
       echo $kartu_kredit;
  } else {
       echo "Silahkan pilih salah satu dari kartu kredit";   
  }
}

// cara 2
if(isset($_POST["konfirmasi"]) {

$kartu_kredit = null;

if(isset($_POST["kartu_kredit"]) {
  $kartu_kredit = $_POST["kartu_kredit"];
}

switch ($kartu_kredit) {
  case "Seabank":
    echo "Kamu sudah memilih Seabank";
    break;
  case "BCA":
    echo "Kamu sudah memilih BCA";
    break;
  case "BSI":
    echo "Kamu sudah memilih BSI";
    break;
  default :
    echo "Silahkan pilih terlebih dahulu";
  }
}

?>
