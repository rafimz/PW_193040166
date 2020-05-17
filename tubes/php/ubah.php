<?php
require 'function.php';
$id = $_GET['id'];
$m = query("SELECT * FROM elektronika WHERE id = $id")[0];
if (isset($_POST['ubah'])) {
if (ubah($_POST) > 0) {
echo "<script>
alert('Data Berhasil diubah!');
document.location.href = 'admin.php';
</script>";
} else {
echo "<script>
alert('Data Gagal diubah!');
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
<title>Ubah Data</title>
</head>
<body>
<h3>Form Ubah Data Barang</h3>
<form action="" method="post">
<input type="hidden" name="id" id="id" value="<?= $m['id']; ?>">
<ul>
<li>
<label for="type">type : </label><br>
<input type="text" name="type" id="type" required value="<?= $m['type']; ?>"><br><br>
</li>
<li>
<label for="chipset">chipset : </label><br>
<input type="text" name="chipset" id="chipset" required value="<?= $m['chipset']; ?>"><br><br>
</li>
<li>
<label for="kamera">baterai : </label><br>
<input type="text" name="kamera" id="kamera" required value="<?= $m['kamera']; ?>"><br><br>
</li>
<li>
<label for="baterai">baterai : </label><br>
<input type="text" name="baterai" id="baterai" required value="<?= $m['baterai']; ?>"><br><br>
</li>
<li>
<label for="foto">Foto : </label><br>
<input type="text" name="foto" id="foto" required value="<?= $m['foto']; ?>" ><br><br>
</li>
<br>
<button type="submit" name="ubah">Ubah Data!</button>
<button type="submit">
<a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
</button>
</ul>
</form>
</body>
</html>