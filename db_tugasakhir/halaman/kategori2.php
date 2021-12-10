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
        <td><a href='index2.php?page=jurnal&pilihan=$row[id_kategori]'>Pilih</a>
        </td>
        </tr>"; $no++;
        }
        ?>
    </table>
</div>