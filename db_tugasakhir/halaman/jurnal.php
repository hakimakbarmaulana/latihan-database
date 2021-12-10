<div id="data">
    <h2>Isi Data Jurnal</h2>
    <form method="post" action="savedb2.php?page=jurnal">
        <table>
            <tr><td>ID JURNAL</td><td><input type="text" name="id_jurnal"></td></tr>
            <tr><td>TAHUN</td><td><input type="text" name="tahun"></td></tr>
            <tr><td>PENULIS</td><td><input type="text" name="nama_penulis"></td></tr>
            <tr><td>JUDUL</td><td><input type="text" name="judul"></td></tr>
            <tr><td>ID ADMIN</td><td><input type="text" name="id_admin"></td></tr>
            <tr><td>ID KATEGORI</td><td><input type="text" name="id_kategori"></td></tr>
            <tr><td>ISSN</td><td><input type="text" name="ISSN"></td></tr>
            <tr><td>HALAMAN</td><td><input type="text" name="halaman"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
        </table>
    </form>
</div>
<div id="tabel">
    <h2>Daftar Jurnal</h2>
    <table border="1">
        <tr><th>NO</th><th>ID JURNAL</th><th>TAHUN</th><th>PENULIS</th><th>JUDUL</th><th>ID ADMIN</th><th>ID KATEGORI</th><th>ISSN</th><th>HALAMAN</th><th>AKSI</th></tr>
        <?php
        include 'koneksidb2.php'; $jurnal = mysqli_query($koneksi, "SELECT * from jurnal"); $no = 1; foreach ($jurnal as $row) {
        echo "<tr>
        <td>$no</td>
        <td>" . $row['id_jurnal'] . "</td>
        <td>" . $row['tahun'] . "</td>
        <td>" . $row['nama_penulis'] . "</td>
        <td>" . $row['judul'] . "</td>
        <td>" . $row['id_admin'] . "</td>
        <td>" . $row['id_kategori'] . "</td>
        <td>" . $row['ISSN'] . "</td>
        <td>" . $row['halaman'] . "</td>
        <td><a href='index.php?page=editjurnal&id_jurnal=$row[id_jurnal]'>Edit</a>
        <a href='deldb2.php?page=jurnal&id_jurnal=$row[id_jurnal]'>Hapus</a>
        </td>
        </tr>"; $no++;
        }
        ?>
    </table>
</div>