<?php
session_start();
if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit;
}
// Menghubungkan dengan file php lainya
require 'function.php';
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
<title>Halaman Admin</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
body {
background-color: skyblue;
}
.container h3 {
text-align: center;
width: 100%;
margin-top: 95px;
margin-bottom: 35px;
}
</style>
</head>
<body>
<!-- Nabvar -->
<nav class="navbar navbar-light bg-info fixed-top">
<div class="container">
<a class="navbar-brand" href="#">
<img src="../assets/img/mi.png" width="80" height="40" class="d-inline-block align-top" alt="">
<strong> MI TOP 10 </strong>
</a>
</div>
</nav>
<div class="container">
<h1>10 HP XIOMI TERBAIK 2020</h1>
<h3><b> </b></h3>
<div class="row">
<div class="col">
<div class="input-group mb-3">
<a href="tambah.php" class="btn btn-outline-warning">+ Tambah Data!</a>
</div>
</div>
<div class="col-lg-5">
<div class="input-group mb-3">
<form action="" method="get" class="input-group">
<input type="text" class="form-control mr-sm-2" name="keyword" placeholder="Search" autocomplete="off">
<div class="input-group-append">
<button class="btn btn-info" type="submit" name="cari">Search!</button>
</div>
</form>
</div>
</div>
</div>
<table class="table table-bordered table-info">
<thead class="text-uppercase text-center thead-dark">
<tr>
<th>no</th>
<th>Opsi</th>
<th>Foto</th>
<th>type</th>
<th>chipset</th>
<th>kamera</th>
<th>baterai</th>
</tr>
<?php if (empty($elektronika)) : ?>
<tr>
<td colspan="7">
<h3>Data tidak ditemukan!</h3>
</td>
</tr>
<?php else : ?>
<?php $i = 1; ?>
<?php foreach ($elektronika as $e) : ?>
<tr>
<td><?= $i; ?></td>
<td>
<a href="ubah.php?id=<?= $e['id']; ?>"><button>Ubah</button></a>
<a href="hapus.php?id=<?= $e["id"]; ?>" onclick="return confirm('Hapus Data ?')"><button>Hapus</button></a>
</td>
<td><img src="../assets/img/<?= $e['foto']; ?>" width="100"></td>
<td><?= $e['type']; ?></td>
<td><?= $e['chipset']; ?></td>
<td><?= $e['kamera']; ?></td>
<td><?= $e['baterai']; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
<?php endif; ?>
</table>
<div class="col">
<div class="input-group mb-3">
<a href="logout.php" class="btn btn-outline-dangerr">Logout</a>
</div>
</div>
</body>
</html>