<?php
include 'koneksidb1.php';
$NIM = $_GET['nim'];
$mahasiswa = mysqli_query($koneksi, "select * from mahasiswa where nim='$NIM'");
$row = mysqli_fetch_array($mahasiswa);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>EDIT DATA</title>
    </head>
    <body>
        <h2>Edit Data Mahasiswa</h2>
        <form method="post" action="edittbmhsdb1.php">
            <input type="hidden" value="<?php echo $row['NIM'];?>" name="NIM">
            <table>
                <tr><td>NIM</td><td><input type="text" value="<?php echo $row['nim'];?>" name="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" value="<?php echo $row['alamat'];?>" name="alamat"></td></tr>
                <tr><td>GENDER</td><td><input type="text" value="<?php echo $row['gender'];?>" name="gender"></td></tr>
                <tr><td>JURUSAN</td><td><input type="text" value="<?php echo $row['jurusan'];?>" name="jurusan"></td></tr>
                <tr><td>ANGKATAN</td><td><input type="text" value="<?php echo $row['angkatan'];?>" name="angkatan"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                <a href="index.php">Kembali</a></td></tr>
            </table>
            </input>
        </form>
    </body>
</html>