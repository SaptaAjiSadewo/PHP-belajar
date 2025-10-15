<?php

/* 
if statement - jika beberapa kondisi true/benar, lakukan sesuatu
               jika kondisi flase/salah, jangan lakukan itu.
*/

  $age = 21;
  $age = 101;

  // jika $age lebih besar sama dengan 18 maka lakukan sesuatu di dalam curly brace 
  if ($age >= 18) {
    echo "Kamu boleh masuk ke dalam website ini.";
  } 
  // jika $age kurang dari sama dengan 0 maka lakukan sesuatu
  elseif ($age <= 0) {
    echo "Itu buka umur yang valid.";
  }
  // jika $age lebih dari sama dengan 100 maka lakukan sesuatu
  elseif ($age >= 100) {
    echo "Kamu terlalu tua untuk bisa masuk kedalam website ini";
  }
  else {
    echo "Kamu harus berumur 18+ tahun untuk masuk website ini.";
  }



  $adult = true;

  // ($adult == true) sama saja
  if ($adult){
    echo "Kamu bisa masuk kedalam website ini";
  }
  else {
    echo "Kamu harus dewasa terlebih dahulu";
  }
  

  // Program untuk menghitung gaji seseorang termasuk lemburnya per-minggu
  $jam = 50;
  $tarif = 15;
  $gaji_mingguan = null;

  if ($jam <= 0) {
    $gaji_mingguan = 0;
  }
  elseif ($jam <= 40){
    $gaji_mingguan = $jam * $tarif;
  }
  elseif {
    $gaji_mingguan = ($tarif * 40) + ($jam - 40) * ($tarif * 1.5);
  }

  echo "Kamu mendapatkan \${$gaji_mingguan} minggu ini"; //$825
  
  
?>
