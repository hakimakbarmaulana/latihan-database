<div id="data">
    <h2>Isi Data Akses Mahasiswa</h2>
    <form method="post" action="savedb2.php?page=aksesmhs">
        <table>
            <tr><td>NIM</td><td><input type="text" name="NIM" placeholder="khusus mahasiswa"></td></tr>
            <tr><td>ID JURNAL</td><td><input type="text" name="id_jurnal"></td></tr>
            <tr><td>TANGGAL AKSES</td><td><input type="date" name="Tanggal_akses"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
        </table>
    </form>
</div>
<div id="tabel">
    <h2>Riwayat Akses Mahasiswa</h2>
    <table border="1">
        <tr><th>NO</th><th>NIM</th><th>ID JURNAL</th><th>TANGGAL AKSES</th><th>AKSI</th></tr>
        <?php
        include 'koneksidb2.php'; $akses = mysqli_query($koneksi, "SELECT * from aksess_mahasiswa"); $no=1; foreach ($akses as $row) {
        echo "<tr>
        <td>$no</td>
        <td>" . $row['NIM'] . "</td>
        <td>" . $row['id_jurnal'] . "</td>
        <td>" . $row['Tanggal_akses'] . "</td>
        <td><a href='index.php?page=editaksesmhs&Nomor=$row[Nomor]'>Edit</a>
        <a href='deldb2.php?page=aksesmhs&Nomor=$row[Nomor]'>Hapus</a>
        </td>
        </tr>"; $no++;
        }
        ?>
    </table>
</div>