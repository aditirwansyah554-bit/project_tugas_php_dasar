<?php
$mahasiswa = [
    [
         "nim" => "25001",
        "nama" => "Zamzam Aduhay",
        "jurusan" => "Kedokteran",
        "email" => "zamzam@upi.edu",
        "nilai" => 90
    ],
    [
         "nim" => "25096",
        "nama" => "Rama",
        "jurusan" => "Fisika",
        "email" => "rama@upi.edu",
        "nilai" => 85
    ],
    [
         "nim" => "25077",
        "nama" => "Teddy",
        "jurusan" => "Olahraga",
        "email" => "teddy@upi.edu",
        "nilai" => 75
    ],
    [
         "nim" => "25056",
        "nama" => "Subianto",
        "jurusan" => "Gizi",
        "email" => "subianto@upi.edu",
        "nilai" => 65
    ],
    [
         "nim" => "25088",
        "nama" => "Sahroni",
        "jurusan" => "Hukum",
        "email" => "sahroni@upi.edu",
        "nilai" => 55
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sintaks Dasar PHP</title>
<style>
    table {border-collapse:collapse;}
    table, th, td {border: 1px solid black;}
    th, td {padding: 8px;}
</style>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>
    <a href="form_pesan.php">Isi Form Pesan</a>
    <br><br>

    <table>
        <thead>
            <tr><th>No</th><th>NIM</th><th>Nama</th><th>Jurusan</th>
            <th>Nilai</th><th>Grade</th><th>Status</th><th>Detail</th></tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($mahasiswa as $data): ?>
                <?php
                //percabangan Grade
                if ($data['nilai'] >= 80){
                    $grade = "A";
                } elseif ($data['nilai'] >= 70){
                    $grade = "B";
                } elseif ($data['nilai'] >= 60){
                    $grade = "C";
                } else {
                    $grade = "D";
                }

                if ($data['nilai'] >= 70){
                    $status = "Lulus";
                } else {
                    $status = "Tidak Lulus";
                }
                
                $url_detail = "detail.php?nim=" . $data["nim"] . 
                              "&nama=" . urlencode($data["nama"]) . 
                              "&jurusan=" . urlencode($data["jurusan"]) . 
                              "&email=" . $data["email"] .
                              "&nilai=" . $data["nilai"] .
                              "&grade=" . $grade . 
                              "&status=" . $status;

                 ?>             
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nim']; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['jurusan']; ?></td>
                    <td><?= $data['nilai']; ?></td>
                    <td><?= $grade; ?></td>
                    <td><?= $status; ?></td>

                    <td><a href = "<?= $url_detail ?>">Lihat Detail</a></td>
            </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>