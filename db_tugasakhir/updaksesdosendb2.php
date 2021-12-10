<?php
include 'koneksidb2.php';
$ID = $_GET['Nomor'];
$akses = mysqli_query($koneksi, "select * from aksess_dosen where Nomor='$ID'");
$row = mysqli_fetch_array($akses);
?>
<div>
    <h2>Edit Data Akses Dosen</h2>
    <form method="post" action="editdb2.php?page=aksesdosen">
        <input type="hidden" value="<?php echo $row['Nomor'];?>" name="Nomor1">
        <table>
            <tr><td>NIP</td><td><input type="text" value="<?php echo $row['NIP'];?>" name="NIP" placeholder="khusus dosen"></td></tr>
            <tr><td>ID JURNAL</td><td><input type="text" value="<?php echo $row['id_jurnal'];?>" name="id_jurnal"></td></tr>
            <tr><td>TANGGAL AKSES</td><td><input type="date" value="<?php echo $row['Tanggal_akses'];?>" name="Tanggal_akses"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
            <a href="index.php?page=aksesdosen">Kembali</a></td></tr>
        </table>
        </input>
    </form>
</div>
    
 