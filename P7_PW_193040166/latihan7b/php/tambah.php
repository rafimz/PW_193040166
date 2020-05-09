<?php
require 'function.php';
if (isset($_POST['tambah'])) {
if (tambah($_POST) > 0) {
echo "<script>
alert('Data Berhasil ditambahkan!');
document.location.href = 'admin.php';
</script>";
} else {
echo "<script>
alert('Data Gagal ditambahkan!');
document.location.href = 'admin.php';
</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Data</title>
</head>
<body>
<h3>Form Tambah Data Barang</h3>
<form action="" method="post">
<ul>
<li>
<label for="foto">Foto : </label><br>
<input type="text" name="foto" id="foto" required><br><br>
</li>
<li>
<label for="type">type : </label><br>
<input type="text" name="type" id="type" required><br><br>
</li>
<li>
<label for="type">chipset : </label><br>
<input type="text" name="chipset" id="chipset" required><br><br>
</li>
<li>
<label for="kamera">kamera : </label><br>
<input type="text" name="kamera" id="kamera" required><br><br>
</li>
<li>
<label for="baterai">baterai : </label><br>
<input type="text" name="baterai" id="baterai" required><br><br>
</li>
<br>
<button type="submit" name="tambah">Tambah Data!</button>
<button type="submit">
<a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
</button>
</ul>
</form>
</body>
</html>