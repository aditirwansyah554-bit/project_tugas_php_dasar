<?php
if (
    !isset($_GET["nim"])||
    !isset($_GET["nama"])||
    !isset($_GET["jurusan"])||
    !isset($_GET["email"])||
    !isset($_GET["nilai"])||
    !isset($_GET["grade"])||
    !isset($_GET["status"])
    ){
        header("Location:index.php");
        exit;
    }
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Detail Mahasiswa</title>
    </head>
    <body>
        <h3>Detail Mahasiswa</h3>
        <ul>
            <li>nim :<?=$_GET["nim"]?></li>
            <li>nama :<?=$_GET["nama"]?></li>
            <li>jurusan :<?=$_GET["jurusan"]?></li>
             <li>email :<?=$_GET["email"]?></li>
              <li>nilai :<?=$_GET["nilai"]?></li>
               <li>grade :<?=$_GET["grade"]?></li>
                <li>status :<?=$_GET["status"]?></li>
        </ul>
        <a href = "index.php">kembali</a>
    </body>
    </html>