<?php
// menghubungkan dengan file php lainnya
require 'php/function.php';
if (isset($_GET['cari'])) {
$keyword = $_GET['keyword'];
$elektronika = query("SELECT * FROM elektronika WHERE
foto LIKE '%$keyword%' OR
type LIKE '%$keyword%' OR
chipset LIKE '%$keyword%' OR
kamera LIKE '%$keyword%' OR
baterai LIKE '%$keyword%' ");
} else {
$elektronika = query("SELECT * FROM elektronika");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PW - 193040166</title>
<link rel="stylesheet" href="css/index.css">
</head>
<body>
<h2 align="center"> 10 HP XIOMI TERBAIK 2020 </h2>
<form action="" method="get">
<input type="text" name="keyword">
<button type="submit" name="cari">Cari!</button>
</form>
<?php if (empty($elektronika)) : ?>
<tr>
<td colspan="7">
<h3>Data tidak ditemukan!</h3>
</td>
</tr>
<?php else : ?>
<?php foreach ($elektronika as $row) :?>
<p class="type">
<a href="php/detail.php?id=<?= $row["kode_barang"] ?>">
<?= $row["type"] ?>
</a>
</p>
<?php endforeach; ?>
<?php endif; ?>
<a href="php/login.php">
<button>Masuk ke halaman Admin</button>
</a>
</body>
</html>