<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        table{
           width: 50%;
           margin-left: 25%;
           margin-right: 20%;
        }
        body{
            margin-left: 60;
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