<?php 
/*
  Switch = menggantikan penggunaan elseif statement lebih efisien, kodenya berkurang untuk ditulis.
*/

$nilai = "A";

// masukkan variabel di dalam tanda kurung yang nantinya akan dibandingkan ==
switch($nilai){
  case "A":
    echo "Nilai kamu bagus benget";
    break
  case "B":
    echo "Nilai kamu bagus Azah";
    break
  case "C":
    echo "Bolehlah";
    break
  case "D":
    echo "Haduh";
    break
  case "F":
    echo "Gagal loh yah";
    break
  default:
    echo "{nilai} ini bukan nilai woy";
}

// jika break dihapus maka case yang match/cocok maka case selanjutnya juga akan di eksekusi

$date = date("1");
//echo $date; // Monday

$date = "Tuesday";

switch ($date){
  case "Monday":
    echo "Saya benci Monday";
    break;
  case "Tuesday":
    echo "Saya benci Tuesday";
    break;
  case "Wednesday":
    echo "Saya benci Wednesday";
    break;
  case "Thursday":
    echo "Saya benci Thursday";
    break;
  case "Friday":
    echo "Saya benci Friday";
    break;
  case "Saturday":
    echo "Saya benci Saturday";
    break;
  case "Sunday":
    echo "Istirahat dulu gasi";
    break;
  default :
    echo "{$date} bukanlah hari";
}

// Cocok untuk pengecekan beberapa nilai berkali-kali

?>
