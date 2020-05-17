<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
$conn = mysqli_connect("localhost", "root", "") or die("kodeksi ke DB gagal");
mysqli_select_db($conn, "phpdasar") or die("Database salah!");
return $conn;
}
// function untuk melakukan query ke database
function query($sql)
{
$conn = koneksi();
$result = mysqli_query($conn, $sql);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
$rows[] = $row;
}
return $rows;
}
// fungsi untuk menambahkan data didalam database
function tambah($data)
{
$conn = koneksi();
$type = htmlspecialchars($data['type']);
$chipset = htmlspecialchars($data['chipset']);
$kamera = htmlspecialchars($data['kamera']);
$baterai = htmlspecialchars($data['baterai']);
$foto = htmlspecialchars($data['foto']);
$query = "INSERT INTO elektronik
VALUES
('','$foto', '$type', '$chipset', '$kamera', '$baterai' ) ";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
// fungsi untuk menghapus data
function hapus($id)
{
$conn = koneksi();
mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id") or die(mysqli_error($conn));
return mysqli_affected_rows($conn);
}
function ubah($data)
{
$conn = koneksi();
$id = $data['id'];
$type = htmlspecialchars($data['type']);
$chipset = htmlspecialchars($data['chipset']);
$kamera = htmlspecialchars($data['kamera']);
$baterai = htmlspecialchars($data['baterai']);
$foto = htmlspecialchars($data['foto']);
$query = "UPDATE elektronik SET
WHERE id = $id,
type = '$type',
chipset = '$chipset',
kamera = '$kamera',
baterai = '$baterai'
foto = '$foto'";
mysqli_query($conn, $query) or die(mysqli_error($conn));
return mysqli_affected_rows($conn);
}
?>