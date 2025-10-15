<?php
/*
  function = Menulis kode hanya sekali, bisa digunakan kembali jika diinginkan
  kata kunci () setelah nama fungsinya untuk menamainya
  add()
*/

function sapa(){
  echo "Halo Selamat Datang";
}

// Untuk memanggil function
sapa();

// jika ingin memasukkan nilai/variabel di dalam pemanggilan function disebut argumen 
sapa("Hinata");

/* 
  maka di dalam function membutuhkan parameter, sebagai tempat variabel sementara
  yang mana hanya akan ada di dalam pemanggilan functionnya itu sendiri.
*/
function sapa($nama_pertama, $umur){
  echo "Halo Selamat Datang {nama_pertama} yang berumur {$umur}";
}

sapa("Hinata", 27);
sapa("Spongebob", 20);
sapa("Komeng", 36);

/*
  Function juga bisa mengembalikan sesuatu
*/

function adalah_genap($bilangan){
  $hasil = $bilangan % 2;
  return $hasil;
}

echo adalah_genap(10); //0


/*
  Contoh Lagi 
  Rumus hipotenusa berasal dari Teorema Pythagoras: \(c^{2}=a^{2}+b^{2}\)
  Hipotenusa adalah sisi terpanjang pada segitiga siku-siku dan merupakan sisi yang berhadapan dengan sudut siku-siku (sudut 90 derajat)
*/

// type hint  / list type data
function hypotenuse(float $a, float $b){
  $c = sqrt($a ** 2 + $b ** 2);
  return $c;
}

hypotenuse(4, 4);
?>
