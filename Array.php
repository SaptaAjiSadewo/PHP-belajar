<?php
// array adalah tipe variabel yang bisa menampung banya value di dalam satu tempat/variabel

$food_1 = "Apple";
$food_2 = "Juice";
$food_3 = "Kolak";

// Pisahkan value/nilai dengan menggunakan tanda koma
$foods = array("apple","orange","banana","cocount");

// echo $foods - tidak bisa 
echo "{$foods[0]} <br>";
echo $foods[1] . "<br>";

// jika mengakses array yang tidak ada maka akan error undefined array
echo $foods[4] . "<br>";

// Mengakses/menampilkan semua array dengan menggunakan foreach
foreach ($foods as $food){
  echo " {$food} <br> ";
}

// Mengubah isi dari elemen
$foods[0] = "pineapple";

// Menambahkan satu array paling terakhir
array_push($foods, "pineapple");

// Menghapus/Memindahkan array paling terakhir
array_pop($foods)

// Mengahpus elemen pertama / digeser keluar dari array
array_shift($foods);

// Memabalikkan array yang tadinya 0 - 1 menjadi 1 - 0, mengembalikkan array baru
$foods = array_reverse($foods);

// Menghitung jumlah elemen yang ada di array
echo count($foods);

?>
