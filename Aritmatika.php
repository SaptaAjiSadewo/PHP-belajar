<?php
// Operator Aritmatika atau Arithmetic untuk melakukan operasqi matematika dasar

$x = 10;
$y = 2;
$z = null;

// addition / penambahan - plus
$z = $x + $y; // 12
// substraction / pengurangan - minus/strip
$z = $x - $y; // 8 
// multiplication // perkalian - asterisk
$z = $x * $y; // 20
// division / pembagian - forward-slash
$z = $x / $y; // 5
// given power / perpangkatan - double asterisk
$z = $x ** $y; //100
// modulus / sisa bagi
$z = $x % $y; //0
  
echo $z;  

// Increment/Decrement Operator

$counter = 0;

//$counter = $counter + 1; <-- ganti ekspresi ini menjadi dibawahnya
$counter++; // meningkatkan 1 
$counter--; // mengurangi 1 

// Increment dengan value
$counter+=2; // meningkatkan 2 
$counter-=2; // mengurangi 2 

echo $counter;

// Operator Precendece
// aturan yang menentukan urutan operasi dievaluasi dalam suatu ekspresi, di mana operator dengan precedence lebih tinggi dieksekusi terlebih dahulu

// order atau urutan yang akan dijawab atau solve terlebih dahulu
// () - parentheses - ekspresi apapun yang dibungkus dengan parentheses maka itu yang akan di-solve dahulu 
// **
// * / %
// + -
$total = 1 + 2 - 3 * 4 / 5 ** 6; // mulai dari 5 ** 6, 3 * 4, lalu dibagi dan dikurangi dari penambahan terakhir.
echo $total
?>
