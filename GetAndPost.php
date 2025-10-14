<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page Title</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial">
</head>
<body>
  <form action="index.php" method="get" method="post">
    <label>username: </label> <br>
      <input type="text" name="username"> <br>
    <label>password: </label> <br>
      <input type="password" name="password"> <br>
    <input type="submit" value="Log in">
  </form>
</body>
</html>

<?php
// metode get 
 echo $_GET["username"] . "<br>";
 echo " {$_GET["password"]} <br>" ;

// metode post
 echo $_POST["username"] . "<br>";


/* $_GET = 
  Data terlihat di dalam url
  No Secure / tidak aman
  Ada limit untuk char
  Bisa di-bookmark dengan values
  Requestnya bisa cached (proses menyimpan salinan hasil eksekusi kode atau data dalam memori atau hard disk untuk 
    mempercepat permintaan selanjutnya dengan menghindari pemrosesan ulang)
  Lebih baik untuk halaman pencarian
*/

/* $_POST =  
  Data dimasukkan ke dalam body dari HTTP
  Lebih aman
  Tidak ada limit data
  tidak bisa di-bookmark
  Requestnya tidak di-cached
  Baik untuk submitting credentials
*/

// simpan hasilnya di dalam local variabel
$barang = "ayam";
$harga = 3.99;
$jumlah = $_GET["jumlah"];
$total = null;

$total = $jumlah * $harga;

echo "Kamu sudah memesan sebanyak : {$jumlah} x {$barang}/s <br>";
echo "Totalnya adalah : \${$total}";

?>
