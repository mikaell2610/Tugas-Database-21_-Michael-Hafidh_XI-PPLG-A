<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Mahasiswa</title>

    <title>tambah data</title>
    <style> 
        table{
           width: 50%;
           margin-left: 25%;
           margin-right: 20%;
        }
        body{
            margin-left: 50;
            font-style: normal;
        }
    </style>
</head>
<body>
<nav style="height:auto; background-color: lightblue;">
        <h1 style="text-align: center; display :auto; color: grape;">Sistem Informasi Siswa Smk Negeri 2 Surakarta</h1>
        <table>
            <td><a style="margin-left: -130%;"  href="index.php" style="color: white;">Home</a></td>
            <td><a style="margin-left: -269%;"  href="data.php" style="color: white;">Data</a></td>
            <td><a style="margin-left: -240%;"  href="login.php" style="color: white;">Admin</a></td>
            <img style ="margin-left: 45%" alt="png" src="logosmk2solo-removebg-preview.png">
        </table>
    </nav>
</body>
<body>
        <h1></h1>
    </body>
    <form action="tambah-proses.php" method="post">
        <table cellpading="3" cellspacing="0">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="siswa_nis" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="siswa_nama" size="30" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <select name="siswa_kelas" required>
                        <option value="">Pilih Kelas</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                <select name="siswa_jurusan" required>
                        <option value="">Pilih Jurusan</option>
                        <option value="Pengembangan Perangkat Lunak Dan Gim">Pengembangan Perangkat Lunak Dan Gim</option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Otomotif">Otomotif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <tr></tr>
                <td><input type="submit" style="background-color: #00FF00;" name="tambah" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
        <h2 style="text-align: center;">Data Siswa</h2>
    </body>
    <table cellpading="5" cellspacing="3" border="1">
        <tr bgcolor="#ccccc">
            <th>No.</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Opsi</th>
        </tr>

        <?php
        require "koneksi.php";
        $query = mysqli_query($conn,"SELECT * FROM siswa");
        if (mysqli_num_rows($query)==0){
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
        }else{
        $no =1;
            while($data = mysqli_fetch_assoc($query)){
                echo'<tr>';
                echo'<td>'.$no.'</td>';
                echo'<td>'.$data['siswa_nis'].'</td>';
                echo'<td>'.$data['siswa_nama'].'</td>';
                echo'<td>'.$data['siswa_kelas'].'</td>';
                echo'<td>'.$data['siswa_jurusan'].'</td>';
                echo'<td><a href="edit.php?id='.$data['siswa_id'],'">Edit</a> / <a href="hapus.php?id=' ,$data ['siswa_id'],'">Hapus</a></td>';
                echo'</tr>';
                $no++;
            }
        }
        ?>

    </table>
</body>
</html>