<?php
include 'koneksidb2.php';
$ID = $_GET['id_kategori'];
$kategori = mysqli_query($koneksi, "select * from kategori where id_kategori='$ID'");
$row = mysqli_fetch_array($kategori);
?>
<div>
    <h2>Edit Data Kategori</h2>
    <form method="post" action="editdb2.php?page=kategori">
        <input type="hidden" value="<?php echo $row['id_kategori'];?>" name="id_kategori1">
        <table>
            <tr><td>ID KATEGORI</td><td><input type="text" value="<?php echo $row['id_kategori'];?>" name="id_kategori"></td></tr>
            <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['Nama_Kategori'];?>" name="Nama_Kategori"></td></tr>
            <tr><td>KETERANGAN</td><td><input type="text" value="<?php echo $row['Keterangan'];?>" name="Keterangan"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
            <a href="index.php?page=kategori">Kembali</a></td></tr>
        </table>
        </input>
    </form>
</div>
    
 