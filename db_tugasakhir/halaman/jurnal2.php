<div id="tabel">
    <h2>Daftar Jurnal</h2>
    <table border="1">
        <tr><th>NO</th><th>ID JURNAL</th><th>TAHUN</th><th>PENULIS</th><th>JUDUL</th><th>ID KATEGORI</th><th>ISSN</th><th>HALAMAN</th><th>AKSI</th></tr>
        <?php
        if(isset($_GET['pilihan'])){
            $pilih = $_GET['pilihan'];
            include 'koneksidb2.php'; $jurnal = mysqli_query($koneksi, "SELECT * from jurnal WHERE id_kategori='$pilih'"); $no = 1; foreach ($jurnal as $row) {
            echo "<tr>
            <td>$no</td>
            <td>" . $row['id_jurnal'] . "</td>
            <td>" . $row['tahun'] . "</td>
            <td>" . $row['nama_penulis'] . "</td>
            <td>" . $row['judul'] . "</td>
            <td>" . $row['id_kategori'] . "</td>
            <td>" . $row['ISSN'] . "</td>
            <td>" . $row['halaman'] . "</td>
            <td><a href=''>Pilih</a>
            </td>
            </tr>"; $no++;
            }
        }
        else{
            include 'koneksidb2.php'; $jurnal = mysqli_query($koneksi, "SELECT * from jurnal"); $no = 1; foreach ($jurnal as $row) {
            echo "<tr>
            <td>$no</td>
            <td>" . $row['id_jurnal'] . "</td>
            <td>" . $row['tahun'] . "</td>
            <td>" . $row['nama_penulis'] . "</td>
            <td>" . $row['judul'] . "</td>
            <td>" . $row['id_kategori'] . "</td>
            <td>" . $row['ISSN'] . "</td>
            <td>" . $row['halaman'] . "</td>
            <td><a href=''>Akses</a>
            </td>
            </tr>"; $no++;
            }
        }
        ?>
    </table>
</div>