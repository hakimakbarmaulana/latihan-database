<div id="tabel">
    <h2>Daftar Mahasiswa</h2>
    <table border="1">
        <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>ALAMAT</th><th>GENDER</th><th>JURUSAN</th><th>ANGKATAN</th></tr>
        <?php
        include 'koneksidb3.php'; $mhs = mysqli_query($koneksi, "SELECT * from mahasiswa"); $no = 1; foreach ($mhs as $row) {
        echo "<tr>
        <td>$no</td>
        <td>" . $row['nim'] . "</td>
        <td>" . $row['nama'] . "</td>
        <td>" . $row['alamat'] . "</td>
        <td>" . $row['gender'] . "</td>
        <td>" . $row['jurusan'] . "</td>
        <td>" . $row['angkatan'] . "</td>
        </tr>"; $no++;
        }
        ?>
    </table>
</div>