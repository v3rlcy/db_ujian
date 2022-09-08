<?php

require 'fungsi.php';

$id_ujian = $_GET["id_ujian"];
$ujian = query("SELECT * FROM tb_ujian WHERE id_ujian = $id_ujian")[0];

if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
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
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah Data</h1>

    <form action="" method="POST">
        <input type="hidden" name="id_ujian" values="<?=$ujian["id_ujian"];?>">
        <ul>
            <li>
                <label for="nama_mapel">Nama Mapel :</label>
                <input type="text" name="nama_mapel" values="<?=$ujian["nama_mapel"];?>">
            </li>
            <li>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan" values="<?=$ujian["jurusan"];?>">
            </li>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" values="<?=$ujian["kelas"];?>">
            </li>
            <li>
                <label for="tgl_ujian">tanggal ujiang :</label>
                <input type="text" name="tgl_ujian" values="<?=$ujian["tgl_ujian"];?>">
            </li>
            <li>
                <label for="durasi_ujian">durasi ujian</label>
                <input type="text" name="durasi_ujian" values="<?=$ujian["durasi_ujian"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>