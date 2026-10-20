<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pesan</title>
</head>
<body>
    <h3>Form Pesan Mahasiswa</h3>
    <form action="hasil_pesan.php"method="POST">
        Masukkan namamu :
        <input type="text" name="nama">
        <br></br>
        Masukkan kelas :
        <input type="text" name="kelas">
        <br></br>
        Pesan
        <input type="text" name="pesan">
        <br></br>
        <button type="submit"name="tombol_kirim">
            kirim pesanmu
    </button>
</form>

<a href="index.php">kembali</a>
</body>
</html>