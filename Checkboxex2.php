<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
  <body>
    <form action="index.php" method="post">
      <input type="checkbox" name="foods[]" value="pizza"> Pizza <br>
      <input type="checkbox" name="foods[]" value="hamburger"> Hamburger <br>
      <input type="checkbox" name="foods[]" value="hotdog"> Hotdog <br>
      <input type="checkbox" name="foods[]" value="taco"> Taco <br>
      <input type="submit" name="konfirmasi" value="konfirmasi">
    </form>
  </body>
</html>

<?php
  if(isset($_POST["konfirmasi"])) {

    $foods = $_POST["foods"];
      echo $foods[0];

    foreach ($foods as $food){
      echo $food;
    }
}
?>
