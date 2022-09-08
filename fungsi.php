<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_ujian');
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nama_mapel =  $data["nama_mapel"];
    $jurusan =  $data["jurusan"];
    $kelas =  $data["kelas"];
    $tgl_ujian =  $data["tgl_ujian"];
    $durasi_ujian =  $data["durasi_ujian"];

    $query = "INSERT INTO tb_ujian
    VALUES
    ('','$nama_mapel','$jurusan','$kelas', '$tgl_ujian', '$durasi_ujian')
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;
    query ($conn, "DELETE FROM tb_ujian WHERE id_ujian = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
        global $conn;
        $id_ujian = $data["id_ujian"];
        $nama_mapel = $data["nama_mapel"];
        $jurusan = $data["jurusan"];
        $kelas = $data["kelas"];
        $tgl_ujian = $data["tgl_ujian"];
        $durasi_ujian = $data["durasi_ujian"];
    
        $query = "UPDATE tb_ujian SET
                     nama_mapel = '$nama_mapel',
                     jurusan = '$jurusan',
                     kelas = '$kelas',
                     tgl_ujian = '$tgl_ujian',
                     durasi_ujian = '$durasi_ujian'
                    WHERE id_ujian = $id_ujian
                    ";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);   
}


?>