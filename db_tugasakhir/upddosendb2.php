<?php
include 'koneksidb2.php';
$NIP = $_GET['nip'];
$dosen = mysqli_query($koneksi, "select * from dosen where NIP='$NIP'");
$row = mysqli_fetch_array($dosen);
?>
<div>
    <h2>Edit Data Dosen</h2>
    <form method="post" action="editdb2.php?page=datadosen">
        <input type="hidden" value="<?php echo $row['NIP'];?>" name="NIP1">
        <table>
            <tr><td>EMAIL</td><td><input type="text" value="<?php echo $row['EmailUB'];?>" name="EmailUB"></td></tr>
            <tr><td>PASSWORD</td><td><input type="text" value="<?php echo $row['pass_EmailUB'];?>" name="pass_EmailUB"></td></tr>
            <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['Nama_dosen'];?>" name="Nama_dosen"></td></tr>
            <tr><td>NIP</td><td><input type="text" value="<?php echo $row['NIP'];?>" name="NIP"></td></tr>
            <tr><td>FAKULTAS</td><td><input type="text" value="<?php echo $row['fakultas_dosen'];?>" name="fakultas_dosen"></td></tr>
            <tr><td>JURUSAN</td><td><input type="text" value="<?php echo $row['jurusan_dosen'];?>" name="jurusan_dosen"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
            <a href="index.php?page=datadosen">Kembali</a></td></tr>
        </table>
        </input>
    </form>
</div>
    
