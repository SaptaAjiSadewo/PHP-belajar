<?php
/*
  Associative array = Array yang dibuat dari pasangan key dan value
  key=>value pairs
*/

$capitals = array(
  "USA" => "Washington D.C",
  "Japan" => "Kyoto",
  "South Korea" => "Seoul",
  "India" => "New Delhi"
);

// Menampilkan salah satu Array
echo $capitals["USA"];

foreach ($capitals as $key => $value) {
  echo "{$key} => {$value} <br>";
}

// Mengganti isi dari elemen Assosiative Array
echo $capitals["USA"] = "Las Vegas";

// Menambah satu key baru di akhir elemen
echo $capitals["China"] = "Beijing";

// Menghapus elemen terakhir
array_pop($capitals);

// Menghapus elemen pertama
array_shift($capitals);

// Hanya menampilkan keynya saja dari array, Mengembalikan array baru
$keys = array_keys($capitals);

foreach ($keys as $key) {
  echo "{$key} <br>";
}

// Hanya menampilkan valuenya saja dari array, Mengembalikan array baru
$values = array_values($capitals);

foreach ($values as $value) {
  echo "{$value} <br>";
}

// Membalikan key menjadi value dan value menjadi keynya
$capitals = array_flip($capitals);

foreach ($capitals as $key => $value) {
  echo "{$key} => {$value} <br>";
}

// Membalikan urutan array pertama menjadi array terkahir
$capitals = array_reverse($capitals);

// Menghitung jumlah antara pasangan key dan value
echo count($capitals);
?>

<!-- Contoh  -->
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
  <form action="index.php" method="post">
    <label> Masukkan Negara</label>
    <input type="text" name="country">
    <input type="submit">
  </form>
</body>
</html>

<?php
$capitals = array(
  "USA" => "Washington D.C",
  "Japan" => "Kyoto",
  "South Korea" => "Seoul",
  "India" => "New Delhi"
);

$capital = $capitals[$_POST["country"]];

echo "The capital is {$capital}";

?>


<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Ibu Kota</title>
</head>
<body>
    <h1>Cari Ibu Kota Negara</h1>
    <form action="index.php" method="post">
        <label>Masukkan Nama Negara:</label>
        <input type="text" name="country">
        <input type="submit" value="Cari">
    </form>
    
    <?php
    $capitals = array(
        "USA" => "Washington D.C",
        "Japan" => "Kyoto",
        "South Korea" => "Seoul",
        "India" => "New Delhi"
    );
    
    // Memeriksa apakah data formulir telah dikirim dan variabel 'country' ada
    if (isset($_POST["country"])) {
        $country = $_POST["country"];
        
        // Memeriksa apakah input negara ada di dalam array $capitals
        if (array_key_exists($country, $capitals)) {
            $capital = $capitals[$country];
            echo "<h2>Ibu kota dari {$country} adalah {$capital}.</h2>";
        } else {
            echo "<h2>Data ibu kota untuk {$country} tidak ditemukan.</h2>";
        }
    }
    ?>
</body>
</html>

