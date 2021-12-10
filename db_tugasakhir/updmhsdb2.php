<?php
include 'koneksidb2.php';
$NIM = $_GET['nim'];
$mahasiswa = mysqli_query($koneksi, "select * from mahasiswa where NIM='$NIM'");
$row = mysqli_fetch_array($mahasiswa);
?>
<div>
    <h2>Edit Data Mahasiswa</h2>
    <form method="post" action="editdb2.php?page=datamhs">
        <input type="hidden" value="<?php echo $row['NIM'];?>" name="NIM1">
        <table>
            <tr><td>EMAIL</td><td><input type="text" value="<?php echo $row['EmailUB'];?>" name="EmailUB"></td></tr>
            <tr><td>PASSWORD</td><td><input type="text" value="<?php echo $row['pass_EmailUB'];?>" name="pass_EmailUB"></td></tr>
            <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['Nama_mahasiswa'];?>" name="Nama_mahasiswa"></td></tr>
            <tr><td>NIM</td><td><input type="text" value="<?php echo $row['NIM'];?>" name="NIM"></td></tr>
            <tr><td>FAKULTAS</td><td><input type="text" value="<?php echo $row['fakultas_mahasiswa'];?>" name="fakultas_mahasiswa"></td></tr>
            <tr><td>JURUSAN</td><td><input type="text" value="<?php echo $row['jurusan_mahasiswa'];?>" name="jurusan_mahasiswa"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
            <a href="index.php?page=datamhs">Kembali</a></td></tr>
        </table>
        </input>
    </form>
</div>
    
