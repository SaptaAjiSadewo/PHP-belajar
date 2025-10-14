<?php                // Tag Pembuka
 echo"Hello World";  // Statement dengan function echo untuk menampilkan teks ke layar.
                     // ditandai dengan semicolon ; untuk mengakhiri statement ini
 // - komentar adalah bagian dari skrip yang tidak akan dieksekusi  
 #  - Ini adalah komentar 1 baris

/*
   Ini adalah komentar multi baris atau bisa memuat lebih dari 1 baris secara langsung.
*/

// - PHP bisa bisa menyimpan banyak file script lainnya seperti HTML, CSS, hingga Javascript

// - Variable adalah container/penyimpanan yang bisa digunakan kembali dan bisa menyimpan berbagai macam data.
$nama = "sapta";
$email = "sapta@gmail.com";
echo $nama; //echo message directly - string literal

// - melihatkan message dan menambahkan variable name
// - gunakan curly braces sebagai placeholder lalu masukkan variable di dalamnya.
echo "Hallo {$nama} <br>";

// Integer/number
$umur = 20;
$users = 4;
$kuantitas = 3;

// Float/Double
$ipk = 3.5;
$harga = 7.99;
$tax_rate = 3.77;

echo "Harganya \${$harga}";

//Boolean - True/False
$SudahKerja = true;
$online = false;

echo "Online status : {$online}" // jika true akan menampilkan 1 jika false akan 0

?>                   // Tag Penutup
