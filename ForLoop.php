<?php
// for-loop untuk mengulangi beberapa kode sejumlah waktu tertentu

echo "Hello World"; // masih oke
// gimana kalo 100x?

// 1. Statement Pertama adalah counter atau menetapkan variabel
// 2. Statement Kedua adalah kondisi berhenti, jika kondisinya salah maka akan keluar dari loopnya
// 3. Statement ketiga adalah Bisa untuk menambahkan atau mengurangi penghitung setelah iterasi

//for ($i = 0 ; $i <= 100 ; $i+=2)
for ($i = 1 ; $i <= 5 ; $i++) {
  echo "indeksnya {$i} : Hello <br>";
}

// Untuk mengurangi maka hitung jika 10 kurang dari 0 maka lakukan pengurangan
for ($i = 10 ; $i > 0 ; $i--) {
  echo "indeksnya {$i} : Hello <br>";
}

?>

<!-- Contoh -->
<!DOCTYPE html>
<html>
  <head>
    <title>Judul Halaman</title>
  </head>
  <body>
    <form action="index.php" method="post">
        <label>Masukkan bilangan yang ingin dihitung</label>
        <input type="number" name="counter">
        <input type="submit" value="hitung">
    </form>  
  </body>
</html>

<?php

  // Akan menghitung sesuai dari bilangan yang diisi
  $counter = $_POST["counter"];

  for ($i = 1; $i <= $counter; $i++){
    echo "{$i} <br>";
  }

  // untuk menghitung mengurang
  for ($i = $counter; $i > 0; $i--){
    echo "{$i} <br>";
  }
?>




