<?php
/*
  Hashing adalah Proses mengubah sensitive data (password) kedalam kata, bilangan dan atau simbol
  melalui proses mathematical. (Mirip dengan encryption) Menyembunyinkan data asli dari 3rd parties
*/

$password = "admin";

/*
 Argumen Pertama adalah variabel/isi nilainya
 Argumen Kedua adalah Algoritmanya
*/
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

/*
 Argumen Pertama adalah variabel/isi nilainya
 Argumen Kedua adalah password yang sudah di hashnya
*/
if(password_verify("admin", $hashed_argumen)){
  echo "Boleh login";
} else {
  echo "Salah woy Passwordnya";
}

