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
$elektronik = query("SELECT * FROM elektronik WHERE id = $id")[0]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubes</title>

</head>
<body>
    <div class="container">
        
        <div class="keterangan">
            <p><?= $elektronik["id"]; ?></p>
            <p><?= $elektronik["type"]; ?></p>
            <p><?= $elektronik["chipset"]; ?></p>
            <p><?= $elektronik["kamera"]; ?></p>
            <p><?= $elektronik["baterai"]; ?></p> 
        </div>
        <div class="foto">
            <img src="../assets/img/<?= $elektronik['foto']; ?>" width="120">
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>          
    
</body>
</html>