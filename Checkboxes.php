<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
  <body>
    <form action="index.php" method="post">
      <input type="checkbox" name="pizza" value="pizza"> Pizza <br>
      <input type="checkbox" name="hamburger" value="hamburger"> Hamburger <br>
      <input type="checkbox" name="hotdog" value="hotdog"> Hotdog <br>
      <input type="checkbox" name="taco" value="taco"> Taco <br>
      <input type="submit" name="konfirmasi" value="konfirmasi">
    </form>
  </body>
</html>

<?php
  if(isset($_POST["konfirmasi"])) {

    if(isset($_POST["pizza"])){
      echo "Kamu suka Pizza";
    }
    if(isset($_POST["hamburger"])){
      echo "Kamu suka Hamburger";
    }
    if(isset($_POST["hotdog"])){
      echo "Kamu suka Hotdog";
    }
    if(isset($_POST["taco"])){
      echo "Kamu suka Taco";
    }

    if(empty($_POST["pizza"])){
      echo "Kamu tidak suka Pizza";
    }
    if(empty($_POST["hamburger"])){
      echo "Kamu tidak suka Hamburger";
    }
    if(empty($_POST["hotdog"])){
      echo "Kamu tidak suka Hotdog";
    }
    if(empty($_POST["taco"])){
      echo "Kamu tidak suka Taco";
    }
  }
?>
