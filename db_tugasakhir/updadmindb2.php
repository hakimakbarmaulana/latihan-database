<?php
include 'koneksidb2.php';
$ID = $_GET['id_admin'];
$admin = mysqli_query($koneksi, "select * from admin where id_admin='$ID'");
$row = mysqli_fetch_array($admin);
?>
<div>
    <h2>Edit Data Admin</h2>
    <form method="post" action="editdb2.php?page=dataadmin">
        <input type="hidden" value="<?php echo $row['id_admin'];?>" name="id_admin1">
        <table>
            <tr><td>ID</td><td><input type="text" value="<?php echo $row['id_admin'];?>" name="id_admin"></td></tr>
            <tr><td>PASSWORD</td><td><input type="text" value="<?php echo $row['pass_admin'];?>" name="pass_admin"></td></tr>
            <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['Nama_admin'];?>" name="Nama_admin"></td></tr>
            <tr><td>FAKULTAS</td><td><input type="text" value="<?php echo $row['fakultas_admin'];?>" name="fakultas_admin"></td></tr>
            <tr><td>JURUSAN</td><td><input type="text" value="<?php echo $row['jurusan_admin'];?>" name="jurusan_admin"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
            <a href="index.php?page=dataadmin">Kembali</a></td></tr>
        </table>
        </input>
    </form>
</div>
    
