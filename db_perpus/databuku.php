<div id="tabel">
    <h2>Daftar Buku</h2>
    <table border="1">
        <tr><th>NO</th><th>KODE</th><th>JUDUL</th><th>PENGARANG</th><th>PENERBIT</th><th>TAHUN</th><th>STOK</th></tr>
        <?php
        include 'koneksidb3.php'; $buku = mysqli_query($koneksi, "SELECT * from buku"); $no = 1; foreach ($buku as $row) {
        echo "<tr>
        <td>$no</td>
        <td>" . $row['kode_buku'] . "</td>
        <td>" . $row['judul'] . "</td>
        <td>" . $row['pengarang'] . "</td>
        <td>" . $row['penerbit'] . "</td>
        <td>" . $row['tahun_terbit'] . "</td>
        <td>" . $row['stok_awal'] . "</td>
        </tr>"; $no++;
        }
        ?>
    </table>
</div>