<?php
/*
  Logical Operator = menggabungkan statement kondisi
  if (conditional || conditional2)

  && = True jika kedua kondisi true/benar
  || = True jika salah satu setidaknya 1 kondisi true
  !  = True jika False, False jika True
*/

$temperatur_cuaca = 100;

if($temperatur_cuaca >= 0 && $temperatur_cuaca <= 30 ){
  echo "Cuacanya bagus";
} else {
  echo "Cuacanya Buruk";
}



$temperatur_cuaca = 100;
$berawan = true

if($temperatur_cuaca < 0 || $temperatur_cuaca > 30 ) {
  echo "Cuacanya bagus";
} else {
  echo "Cuacanya Buruk";
}
  
if($berawan) {
  echo "Itu berawan";
} else {
  echo "Itu panas";
}

// Contoh Pemilihan

$umur = 25;
$warga = true;

//if ($age >= 18 && $warga)
if (!$age >= 18 || !$warga) {
  echo "Kamu tidak bisa memilih";
}
else {
  echo "Kamu bisa memilih";
}

// tiket film
$child = false;
$senior = false;
$ticket = null;

if ($child || $senior) {
  $ticket = 10;
}
else {
  $ticket = 15;
}

echo "Harga dari tiketnya adalah \${$ticket}"; //15
?>
