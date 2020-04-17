<?php
// Mengecek apakah ada id yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require 'function.php';

// Mengambil id dari url
$id = $_GET["id"];

// melakukan query dengan parameter id yang diambil dari url
$elektronika = query("SELECT * FROM elektronika WHERE id = $id")[0]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5c</title>

</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $elektronika['gambar']; ?>" width="120">
        </div>
        <div class="keterangan">
            <p><?= $elektronika["id"]; ?></p>
            <p><?= $elektronika["merek"]; ?></p>
            <p><?= $elektronika["chipset"]; ?></p>
            <p><?= $elektronika["camera"]; ?></p>
            <p><?= $elektronika["baterai"]; ?></p> 
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>          
    
</body>
</html>