<?php
  $username = "Sapta Azah";
  $telepon = "123-456-7890";

  // Membuat teks menjadi huruf kecil
  $username = strtolower($username); // sapta azah

  // Membuat teks menjadi huruf besar/kapital
  $username = strtoupper($username); // SAPTA AZAH

  // Menghapus spasi seblum atau setelah string
  $username = trim($username);       // Sapta Azah

  // Melapisi hingga jumlah karakter tertentu dengan karakter yang kita tentukan
  $username = str_pad($username, 10, "/");    // Sapta Azah///////

  // Mengganti karakter yang ada dengan karakter lainnya  
  $telepon = str_replace("-", "/", $telepon);
  echo $telepon;

  // Membalikkan teks
  $username = strrev($username);        // hazA atpaS 

  // Mengacak teks
  $username = str_shuffle($username);   // 

  // Membandingkan string atau variabel dengan isi string
  $username = strcmp($username, "Sapta Azah");        // 1 jika true 

  // Menghitung panjang string, mengembalikan elemen
  $count = strlen($username);       // 10
  echo $count;

  // Menemukan posisi string karakter, mengembalikkan index
  $index = strpos($username, " ");     // 5
  echo $index;

  // Membuat string baru dari bagian dari string lain
  $firstname = substr($username, 0, 5);     // Sapta
  $lastname  = substr($username, 4);        // Azah

  /* 
  fungsi bawaan untuk memecah sebuah string menjadi sebuah array dengan 
  menggunakan karakter atau string pemisah tertentu
  */

  $username = "Sapta The Azah";
  $fullname = explode(" ", $username);

  foreach ($fullname as $name) {
    echo $name . "<br>"; // [0]Sapta [1]The [2]Azah
  }

  /* 
  fungsi yang digunakan untuk menggabungkan elemen-elemen sebuah array 
  menjadi satu string, menggunakan pemisah (separator) tertentu
  */

  $username = array("Sapta", "The", "Azah");
  $username = implode("-", $username);

  echo $username;
?>
