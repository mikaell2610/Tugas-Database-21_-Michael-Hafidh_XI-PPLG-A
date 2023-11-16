<?php

if(isset($_POST['simpan'])){
    include ("koneksi.php");

    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $update = mysqli_query($conn, "UPDATE siswa SET siswa_nis='$nis', siswa_nama='$nama', siswa_kelas='$kelas', siswa_jurusan='$jurusan' WHERE siswa_id='$id'");

    if($update){
        echo 'Data berhasil di simpan';
        echo '<a href="index.php?id='.$id.'">Kembali</a>';
    }else{
        echo 'Gagal menyimpan data';
        echo '<a href="edit.php?id='.$id.'">Kembali</a>';
    }
}else {
    echo '<script>window.history.back()</script>';
}

?>