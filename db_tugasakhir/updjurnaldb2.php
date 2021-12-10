<?php
include 'koneksidb2.php';
$ID = $_GET['id_jurnal'];
$jurnal = mysqli_query($koneksi, "select * from jurnal where id_jurnal='$ID'");
$row = mysqli_fetch_array($jurnal);
?>
<div>
    <h2>Edit Data Jurnal</h2>
    <form method="post" action="editdb2.php?page=jurnal">
        <input type="hidden" value="<?php echo $row['id_jurnal'];?>" name="id_jurnal1">
        <table>
            <tr><td>ID JURNAL</td><td><input type="text" value="<?php echo $row['id_jurnal'];?>" name="id_jurnal"></td></tr>
            <tr><td>TAHUN</td><td><input type="text" value="<?php echo $row['tahun'];?>" name="tahun"></td></tr>
            <tr><td>PENULIS</td><td><input type="text" value="<?php echo $row['nama_penulis'];?>" name="nama_penulis"></td></tr>
            <tr><td>JUDUL</td><td><input type="text" value="<?php echo $row['judul'];?>" name="judul"></td></tr>
            <tr><td>ID ADMIN</td><td><input type="text" value="<?php echo $row['id_admin'];?>" name="id_admin"></td></tr>
            <tr><td>ID KATEGORI</td><td><input type="text" value="<?php echo $row['id_kategori'];?>" name="id_kategori"></td></tr>
            <tr><td>ISSN</td><td><input type="text" value="<?php echo $row['ISSN'];?>" name="ISSN"></td></tr>
            <tr><td>HALAMAN</td><td><input type="text" value="<?php echo $row['halaman'];?>" name="halaman"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
            <a href="index.php?page=jurnal">Kembali</a></td></tr>
        </table>
        </input>
    </form>
</div>
    
