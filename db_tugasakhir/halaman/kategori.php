<div id="data">
    <h2>Isi Data Kategori</h2>
    <form method="post" action="savedb2.php?page=kategori">
        <table>
            <tr><td>ID KATEGORI</td><td><input type="text" name="id_kategori"></td></tr>
            <tr><td>NAMA</td><td><input type="text" name="Nama_Kategori"></td></tr>
            <tr><td>KETERANGAN</td><td><input type="text" name="Keterangan"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
        </table>
    </form>
</div>
<div id="tabel">
    <h2>Daftar Kategori</h2>
    <table border="1">
        <tr><th>NO</th><th>ID KATEGORI</th><th>NAMA</th><th>KETERANGAN</th><th>AKSI</th></tr>
        <?php
        include 'koneksidb2.php'; $kategori = mysqli_query($koneksi, "SELECT * from kategori"); $no = 1; foreach ($kategori as $row) {
        echo "<tr>
        <td>$no</td>
        <td>" . $row['id_kategori'] . "</td>
        <td>" . $row['Nama_Kategori'] . "</td>
        <td>" . $row['Keterangan'] . "</td>
        <td><a href='index.php?page=editkategori&id_kategori=$row[id_kategori]'>Edit</a>
        <a href='deldb2.php?page=kategori&id_kategori=$row[id_kategori]'>Hapus</a>
        </td>
        </tr>"; $no++;
        }
        ?>
    </table>
</div>