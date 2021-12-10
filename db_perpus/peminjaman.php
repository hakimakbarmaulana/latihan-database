<div id="tabel">
    <h2>Daftar Peminjaman</h2>
    <table border="1">
        <tr><th>NO</th><th>ID</th><th>NIM</th><th>KODE BUKU</th><th>TANGGAL PINJAM</th></tr>
        <?php
        include 'koneksidb3.php'; $pinjam = mysqli_query($koneksi, "SELECT * from peminjaman"); $no = 1; foreach ($pinjam as $row) {
        echo "<tr>
        <td>$no</td>
        <td>" . $row['id_pinjam'] . "</td>
        <td>" . $row['nim'] . "</td>
        <td>" . $row['kode_buku'] . "</td>
        <td>" . $row['tgl_pinjam'] . "</td>
        </tr>"; $no++;
        }
        ?>
    </table>
</div>