<?php
/*
  Cookie adalah Informasi tentang user yang  disimpan di web-browser
  Biasanya untuk iklan, Browsing preferences, dan non-sensitive data
*/

/* 
  Menggunakan function yang berisi Associative Array
  Argumen pertama "fav_food" adalah key-nya
  Argumen kedua "pizza" adalah value-nya
  Argumen ketiga adalah expiration atau kadaluarsa dari cookienya
  Argumen keempat adalah jalur filenya

  cek dengan cara inspect klik kanan lalu cari di bagian Storage di dalam Cookie
*/

// Untuk Membuat Cookie
setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "coffe", time() + (86400 * 3), "/");

foreach($_COOKIE as $key => $value){
  echo "{$key} = {$value}";
}

if($isset($_COOKIE["fav_food"])){
  echo "Beli beberapa {$_COOKIE["fav_food"]}";
} else {
  echo "Saya tidak tahu loh ya";
}

// Untuk Menghapus Cookie
setcookie("fav_drink", "coffe", time() - 0, "/");
