<div id="data">
    <h2>Isi Data Mahasiswa</h2>
    <form method="post" action="savedb2.php?page=datamhs">
        <table>
            <tr><td>EMAIL</td><td><input type="text" name="EmailUB"></td></tr>
            <tr><td>PASSWORD</td><td><input type="text" name="pass_EmailUB"></td></tr>
            <tr><td>NAMA</td><td><input type="text" name="Nama_mahasiswa"></td></tr>
            <tr><td>NIM</td><td><input type="text" name="NIM"></td></tr>
            <tr><td>FAKULTAS</td><td><input type="text" name="fakultas_mahasiswa"></td></tr>
            <tr><td>JURUSAN</td><td><input type="text" name="jurusan_mahasiswa"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
        </table>
    </form>
</div>
<div id="tabel">
    <h2>Daftar Mahasiswa</h2>
    <table border="1">
        <tr><th>NO</th><th>EMAIL</th><th>PASSWORD</th><th>NAMA</th><th>NIM</th><th>FAKULTAS</th><th>JURUSAN</th><th>AKSI</th></tr>
        <?php
        include 'koneksidb2.php'; $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa"); $no = 1; foreach ($mahasiswa as $row) {
        echo "<tr>
        <td>$no</td>
        <td>" . $row['EmailUB'] . "</td>
        <td> * * * * * * </td>
        <td>" . $row['Nama_mahasiswa'] . "</td>
        <td>" . $row['NIM'] . "</td>
        <td>" . $row['fakultas_mahasiswa'] . "</td>
        <td>" . $row['jurusan_mahasiswa'] . "</td>
        <td><a href='index.php?page=editmhs&nim=$row[NIM]'>Edit</a>
        <a href='deldb2.php?page=datamhs&nim=$row[NIM]'>Hapus</a>
        </td>
        </tr>"; $no++;
        }
        ?>
    </table>
</div>