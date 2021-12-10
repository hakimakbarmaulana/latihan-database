<div id="tabel">
    <h2>Daftar Pengembalian</h2>
    <table border="1">
        <tr><th>NO</th><th>ID</th><th>TANGGAL KEMBALI</th></tr>
        <?php
        include 'koneksidb3.php'; $kembali = mysqli_query($koneksi, "SELECT * from pengembalian"); $no = 1; foreach ($kembali as $row) {
        echo "<tr>
        <td>$no</td>
        <td>" . $row['id_pinjam'] . "</td>
        <td>" . $row['tgl_kembali'] . "</td>
        </tr>"; $no++;
        }
        ?>
    </table>
</div>