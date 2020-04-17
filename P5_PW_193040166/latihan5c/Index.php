<?php
   // menghubungkan dengan file php lainnya
   require 'php/function.php';

   // melakukan query
   $elektronika = query("SELECT * FROM elektronika")
?> 


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 5c</title>
    </head>
    
    <body>
        <h2 align="center"> HP Xiomi Terbaik 2020 </h2>
            <?php foreach ($elektronika as $row) :?>
                <p class="merek">
                    <a href="php/detail.php?id=<?= $row["id"] ?>">
                        <?= $row["merek"] ?>
                    </a>
                </p>    
            <?php endforeach; ?>                
       
    </body>
</html>