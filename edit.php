<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 50%;
            margin-left: 40%;
            margin-right: 20%;
        }
    </style>
</head>

<body>
    <h2>Edit Data Siswa Smk Negeri 2 Surakarta</h2>

    <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>

    <h3>Edit Data</h3>

    <?php
    include('koneksi.php');

    $id = $_GET['id'];
    $show = mysqli_query($conn,"SELECT * FROM siswa WHERE siswa_id=$id");

    if(mysqli_num_rows($show) == 0){
        echo '<script>window.history.back()</script>';
    }else{
        $data = mysqli_fetch_assoc($show);
    }
    ?>
    <form action="edit-proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <table cellpading="3" cellspacing="0">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" value="<?php echo $data['siswa_nis'];?>" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data['siswa_nama'];?>" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <select name="kelas" required>
                        <option value="">Pilih Kelas</option>
                        <option value="X" <?php if($data['siswa_kelas']=='X'){echo 'selected';}?>>X</option>
                        <option value="XI" <?php if($data['siswa_kelas']=='XI'){echo 'selected';}?>>XI</option>
                        <option value="XII" <?php if($data['siswa_kelas']=='XII'){echo 'selected';}?>>XII</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" required>
                        <option value="">Pilih Jurusan</option>
                        <option value="Pengembangan Perangkat Lunak Dan Gim" <?php if($data['siswa_jurusan']=='Pengembangan Perangkat Lunak Dan Gim'){echo 'selected';}?>>Pengembangan Perangkat Lunak Dan Gim</option>
                        <option value="Teknik Komputer Dan Jaringan" <?php if($data['siswa_jurusan']=='Teknik Komputer Dan Jaringan'){echo 'selected';}?>>Teknik Komputer Dan Jaringan</option>
                        <option value="Multimedia" <?php if($data['siswa_jurusan']=='Multimedia'){echo 'selected';}?>>Multimedia</option>
                        <option value="Teknik Mesin" <?php if($data['siswa_jurusan']=='Teknik Mesin'){echo 'selected';}?>>Teknik Mesin</option>
                        <option value="Otomotif" <?php if($data['siswa_jurusan']=='Otomotif'){echo 'selected';}?>>Otomotif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>

        </table>
    </form>
</body>
</html>