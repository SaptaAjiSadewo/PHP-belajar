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
    <label>radius :</label> <br>
    <input type="text" name="radius">
    <input type="submit" value="hitung">
  </form>
</body>
</html>

<?php
  $radius = $_POST["radius"];
  $keliling = null;
  $area = null;
  $volume = null;

  $keliling = 2 * pi() * $radius;   // 2 kali 3.14 kali radiusnya
  $keliling = $round($keliling, 2); // dibulatkan terdekat lalu munculkan hanya 2 bilangan setelah koma

  $area = pi() * pow($radius, 2);   // 3.14 dikali pangkat 2 dari nilai radiusnya
  $area = round($area, 2);          // dibulatkan terdekat lalu munculkan hanya 2 bilangan setelah koma

  $volume = 4/3 * pi() * pow($radius, 3);   // 3.14 dikali pangkat 3 dari nilai radiusnya
  $volume = round($volume, 2);                // dibulatkan terdekat lalu munculkan hanya 2 bilangan setelah koma

  echo "Keliling = {$keliling}cm <br>";
  // 5  = 31.415926535898
  // 15 = 94.25
  echo "Area = {$area}cm^2 <br>";
  // 15 = 706.86cm^2
  // 5 = 78.54cm^2
  echo "Volume = {$volumen}cm^3 ";
  // 5 = 523.6cm^3    
?>
