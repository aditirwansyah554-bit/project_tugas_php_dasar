<?php
if (
    !isset($_POST["nama"])||
    !isset($_POST["kelas"])||
    !isset($_POST["pesan"])
){
    header("Location: form_pesan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pesan</title>
</head>
<body>
    <h3>Pesan Berhasil Dikirim</h3>
    Terima kasih, <?=$_POST["nama"] ?>!
    <ul>
        <li>nama:<?=$_POST["nama"]?></li>
        <li>kelas :<?=$_POST["kelas"]?></li>
        <li>pesan :<?=$_POST["pesan"]?></li>
</ul>
<a href="index.php">kembali ke halaman utama</a>
</body>
</html>