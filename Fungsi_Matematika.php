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
    <label>x :</label> <br>
      <input type="text" name="x"> <br>
    <label>y :</label> <br>
      <input type="text" name="y"> <br>
    <label>z :</label> <br>
      <input type="text" name="z"> <br>
    <input type="submit" value="total">
  </form>
</body>
</html>

<?php

  // membutuhkan 1 number
  $x = $_POST["x"];
  $total = null;

  // absolute value = abs() - akan mengembalikan absolute number
  $total = abs($x); // -100.123 = 100.123

  // rounded value = round(float $num, int $precision = 0, int|RoundingMode $mode = RoundingMode::HalfAwayFromZero): float  
  // akan membulatkan angka floating-point ke bilangan bulat terdekat
  $total = round($x); // 3.14 = 3

  // akan dibulatkan ke bawah
  $total = floor($x); // 3.99 = 3

  // akan dibulatkan ke atas
  $total = ceil($x); // 3.14 = 4

  echo $total;


  // membutuhkan 2 number
  $x = $_POST["x"];
  $y = $_POST["y"];
  $total = null;

  // power function = pow() - akan mengembalikan perpangkatan
  $total = pow($x, $y); // 2 ** 3 =  8, 2 ** 4 = 16

  // square root dari sebuah bilangan atau mengembalikan akar kuadrat
  $total = sqrt($x); //100 = 10 = 10 * 10

  // membutuhkan 3 number
  $x = $_POST["x"];
  $y = $_POST["y"];
  $z = $_POST["z"];
  $total = null;

  // max() - mencari nilai maximum/tertinggi dari variabel
  $total = max($x, $y, $z); //$x = 30, $y = 20, $z = 10; - $x

  // min() - mencari nilai minimum/terkecil dari variabel
  $total = min($x, $y, $z); //$x = 30, $y = 20, $z = 10; - $z

  // fungsi dari phi 3.14
  $total = pi(); // 3.1415926535898

  // fungsi rand untuk menampilkan bilangan random
  $total = rand(1, 6); // akan memunculkan bilangan dari 1 sampai 6

  echo $total;
    
?>
