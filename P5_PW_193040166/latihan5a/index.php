<?php
    // Melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");

    // Memilih database
    mysqli_select_db($conn, "PW_193040166") or die ("Dtabase salah!");

    // query mengambbil objek dari tabel didalam database
    $result = mysqli_query($conn, "SELECT * FROM elektronika")
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Latihan 5a</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    
    <body>
    
        <h3>HP Xiomi Terbaik 2020</h3>

        <table border="1px">

            <tr>
                <th>Id</th>
                <th>Gambar</th>
                <th>merek</th>
                <th>chipset</th>
                <th>camera</th>
                <th>baterai</th>
                

            </tr>
            <?php $i = 1 ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?> 
            <tr>
                <td><?= $i ?></td>
                <td><img width="100px" src="assets/img/<?= $row["gambar"]; ?>"></td>
                <td><?= $row["merek"] ?></td>
                <td><?= $row["chipset"] ?></td>
                <td><?= $row["camera"] ?></td>
                <td><?= $row["baterai"] ?></td>
                
            </tr>
            <?php $i++ ?>
            <?php  endwhile ?>
        </table>
		
		<h5 align="center"></h5>
    </body>
</html>