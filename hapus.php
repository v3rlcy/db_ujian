<?php

require 'fungsi.php';
$id_ujian = $_GET["id_ujian"];

if(hapus($id_ujian) > 0){
    echo "<script> alert ('Data Telah di Hapus'); document.location.href = 'index.php';</script>";
}
else {
    echo "<script> alert ('Data Gagal di Hapus'); document.location.href = 'index.php';</script>";
}

?>