<div id="data">
    <h2>Isi Data Dosen</h2>
    <form method="post" action="savedb2.php?page=datadosen">
        <table>
            <tr><td>EMAIL</td><td><input type="text" name="EmailUB"></td></tr>
            <tr><td>PASSWORD</td><td><input type="text" name="pass_EmailUB"></td></tr>
            <tr><td>NAMA</td><td><input type="text" name="Nama_dosen"></td></tr>
            <tr><td>NIP</td><td><input type="text" name="NIP"></td></tr>
            <tr><td>FAKULTAS</td><td><input type="text" name="fakultas_dosen"></td></tr>
            <tr><td>JURUSAN</td><td><input type="text" name="jurusan_dosen"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
        </table>
    </form>
</div>
<div id="tabel">
    <h2>Daftar Dosen</h2>
    <table border="1">
        <tr><th>NO</th><th>EMAIL</th><th>PASSWORD</th><th>NAMA</th><th>NIP</th><th>FAKULTAS</th><th>JURUSAN</th><th>AKSI</th></tr>
        <?php
        include 'koneksidb2.php'; $dosen = mysqli_query($koneksi, "SELECT * from dosen"); $no = 1; foreach ($dosen as $row) {
        echo "<tr>
        <td>$no</td>
        <td>" . $row['EmailUB'] . "</td>
        <td> * * * * * * </td>
        <td>" . $row['Nama_dosen'] . "</td>
        <td>" . $row['NIP'] . "</td>
        <td>" . $row['fakultas_dosen'] . "</td>
        <td>" . $row['jurusan_dosen'] . "</td>
        <td><a href='index.php?page=editdosen&nip=$row[NIP]'>Edit</a>
        <a href='deldb2.php?page=datadosen&nip=$row[NIP]'>Hapus</a>
        </td>
        </tr>"; $no++;
        }
        ?>
    </table>
</div>