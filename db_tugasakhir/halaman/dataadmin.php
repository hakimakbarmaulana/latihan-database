<div id="data">
    <h2>Isi Data Admin</h2>
    <form method="post" action="savedb2.php?page=dataadmin">
        <table>
            <tr><td>ID</td><td><input type="text" name="id_admin"></td></tr>
            <tr><td>PASSWORD</td><td><input type="text" name="pass_admin"></td></tr>
            <tr><td>NAMA</td><td><input type="text" name="Nama_admin"></td></tr>
            <tr><td>FAKULTAS</td><td><input type="text" name="fakultas_admin"></td></tr>
            <tr><td>JURUSAN</td><td><input type="text" name="jurusan_admin"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
        </table>
    </form>
</div>
<div id="tabel">
    <h2>Daftar Admin</h2>
    <table border="1">
        <tr><th>NO</th><th>ID</th><th>PASSWORD</th><th>NAMA</th><th>FAKULTAS</th><th>JURUSAN</th><th>AKSI</th></tr>
        <?php
        include 'koneksidb2.php'; $admin = mysqli_query($koneksi, "SELECT * from `admin`"); $no = 1; foreach ($admin as $row) {
        echo "<tr>
        <td>$no</td>
        <td>" . $row['id_admin'] . "</td>
        <td> * * * * * * </td>
        <td>" . $row['Nama_admin'] . "</td>
        <td>" . $row['fakultas_admin'] . "</td>
        <td>" . $row['jurusan_admin'] . "</td>
        <td><a href='index.php?page=editadmin&id_admin=$row[id_admin]'>Edit</a>
        <a href='deldb2.php?page=dataadmin&id_admin=$row[id_admin]'>Hapus</a>
        </td>
        </tr>"; $no++;
        }
        ?>
    </table>
</div>