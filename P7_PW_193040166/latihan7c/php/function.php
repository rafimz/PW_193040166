<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
$conn = mysqli_connect("localhost", "root", "") or die("kodeksi ke DB gagal");
mysqli_select_db($conn, "tubes_193040166") or die("Database salah!");
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
$foto = htmlspecialchars($data['foto']);
$type = htmlspecialchars($data['type']);
$chipset = htmlspecialchars($data['chipset']);
$kamera = htmlspecialchars($data['kamera']);
$baterai = htmlspecialchars($data['baterai']);
$query = "INSERT INTO elektronika
VALUES
('','$foto', '$type', '$chipset', '$kamera', '$baterai' ) ";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
// fungsi untuk menghapus data
function hapus($id)
{
$conn = koneksi();
mysqli_query($conn, "DELETE FROM elektronika WHERE id = $id") or die(mysqli_error($conn));
return mysqli_affected_rows($conn);
}
function ubah($data)
{
$conn = koneksi();
$id = $data['id'];
$foto = htmlspecialchars($data['foto']);
$type = htmlspecialchars($data['type']);
$chipset = htmlspecialchars($data['chipset']);
$kamera = htmlspecialchars($data['kamera']);
$baterai = htmlspecialchars($data['baterai']);
$query = "UPDATE elektronika SET
foto = '$foto',
type = '$type',
chipset = '$chipset',
kamera = '$kamera',
baterai = '$baterai'
WHERE id = $id";
mysqli_query($conn, $query) or die(mysqli_error($conn));
return mysqli_affected_rows($conn);
}
?>