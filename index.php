 <?php

require 'fungsi.php';
$tb_ujian = query("SELECT * FROM tb_ujian");

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian</title>
</head>
<body>
    <a href="tambah.php">Tambah Data</a>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Aksi</th>
            <th>Nama Mapel</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Tanggal Ujian</th>
            <th>Durasi Ujian</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($tb_ujian as $row):?>
            <tr>
                <td>
                    <a href="ubah.php?id_ujian=<?= $row["id_ujian"];?>">Ubah Data</a> ||
                    <a href="hapus.php?id_ujian=<?= $row["id_ujian"];?>" onclick = "return confirm ('yakin?')">Hapus Data</a>
                </td>
                <td><?= $row["nama_mapel"];?></td>
                <td><?= $row["jurusan"];?></td>
                <td><?= $row["kelas"];?></td>
                <td><?= $row["tgl_ujian"];?></td>
                <td><?= $row["durasi_ujian"];?></td>
            </tr>

            <?php $i++; ?>
            <?php endforeach;?>
    </table>
</body>
</html>