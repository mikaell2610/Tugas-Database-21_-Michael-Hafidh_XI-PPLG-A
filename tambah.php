<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
<h2>Tambah Data Siswa</h2>
    
    <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
    
    <h3>Tambah Data Siswa</h3>

    <form action="tambah-proses.php" method="post">
        <table cellpading="3" cellspacing="0">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" size="30" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <select name="kelas" required>
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
                <select name="jurusan" required>
                        <option value="">Pilih Jurusan</option>
                        <option value="Pengembangan Perangkat Lunak Dan Gim">Pengembangan Perangkat Lunak Dan Gim</option>
                        <option value="Teknik Jaringan Dan Komputer">Teknik Jaringan Dan Komputer</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Otomotif">Otomotif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>