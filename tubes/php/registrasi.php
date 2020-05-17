<?php
require 'function.php';

if (isset($_POST['register'])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
               alert('Registrasi Berhasil');
               document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
    body {
        background-color: darkblue;
    }
    .container {
        background-color: white;
        width: 355px;
        padding: 25px;
        margin: auto;
        margin-top: 100px;
        border: 2px yellow;
        font-size: 20px;
        border-radius: 5px;
    }
    h3 {
        background-color: red;
        text-align: center;
        color: white;
        padding: 15px;
        border-radius: 10px;
    }

    table {
        width: 220px;
        padding: 14px 12px;
        box-sizing: border-box;
        font-size: 20px;
    }
    button[type=submit] {
        background-color: blue;
        width: 100%;
        height: 35px;
        text-align: center;
        font-size: 15px;
        border-radius: 12px;
        color: white;

    }
    </style>
</head>
<body>
<div class="container">
    <h3>Form Registrasi</h3>
<form action="" method="post">
    <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text " name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
    </table>        
    <button type="submit" name="register">REGISTER</button>     
</form>
</div>    
</body>
</html> 