<?php

require 'fungsi.php';
if(isset($_POST["submit"])){
    if (tambah($_POST) > 0){
        echo "<script> alert ('Data Telah di Tambahkan'); document.location.href = 'index.php';</script>";
}
else {
    echo "<script> alert ('Data Gagal di Tambahkan'); document.location.href = 'index.php';</script>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama_mapel">Nama Mapel :</label>
                <input type="text" name="nama_mapel">
            </li>
            <li>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan">
            </li>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas">
            </li>
            <li>
                <label for="tgl_ujian">tanggal ujian :</label>
                <input type="text" name="tgl_ujian">
            </li>
            <li>
                <label for="durasi_ujian">durasi ujian</label>
                <input type="text" name="durasi_ujian">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>