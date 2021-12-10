<?php
session_start();
include 'koneksidb2.php';
$usnm = $_SESSION['username'];
$bag = $_SESSION['profil'];
if($bag=='mhs'){
    $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa where EmailUB='$usnm'");
    $row = mysqli_fetch_array($mahasiswa);
    echo "<div>
    <h2>Profil Mahasiswa</h2>
        <table>
            <tr><td>EMAIL</td><td> : </td><td>" . $row['EmailUB'] . "</td></tr>
            <tr><td>PASSWORD</td><td> : </td><td>" . $row['pass_EmailUB'] . "</td></tr>
            <tr><td>NAMA</td><td> : </td><td>" . $row['Nama_mahasiswa'] . "</td></tr>
            <tr><td>NIM</td><td> : </td><td>" . $row['NIM'] . "</td></tr>
            <tr><td>FAKULTAS</td><td> : </td><td>" . $row['fakultas_mahasiswa'] . "</td></tr>
            <tr><td>JURUSAN</td><td> : </td><td>" . $row['jurusan_mahasiswa'] . "</td></tr>
        </table>
    </div>";
}
elseif($bag=='dsn'){
    $dosen = mysqli_query($koneksi, "select * from dosen where EmailUB='$usnm'");
    $row = mysqli_fetch_array($dosen);
    echo "<div>
    <h2>Profil Dosen</h2>
        <table>
            <tr><td>EMAIL</td><td> : </td><td>" . $row['EmailUB'] . "</td></tr>
            <tr><td>PASSWORD</td><td> : </td><td>" . $row['pass_EmailUB'] . "</td></tr>
            <tr><td>NAMA</td><td> : </td><td>" . $row['Nama_dosen'] . "</td></tr>
            <tr><td>NIP</td><td> : </td><td>" . $row['NIP'] . "</td></tr>
            <tr><td>FAKULTAS</td><td> : </td><td>" . $row['fakultas_dosen'] . "</td></tr>
            <tr><td>JURUSAN</td><td> : </td><td>" . $row['jurusan_dosen'] . "</td></tr>
        </table>
    </div>";
}
elseif($bag=='adm'){
    $admin = mysqli_query($koneksi, "select * from `admin` where id_admin='$usnm'");
    $row = mysqli_fetch_array($admin);
    echo "<div>
    <h2>Profil Admin</h2>
        <table>
            <tr><td>ID</td><td> : </td><td>" . $row['id_admin'] . "</td></tr>
            <tr><td>PASSWORD</td><td> : </td><td>" . $row['pass_admin'] . "</td></tr>
            <tr><td>NAMA</td><td> : </td><td>" . $row['Nama_admin'] . "</td></tr>
            <tr><td>FAKULTAS</td><td> : </td><td>" . $row['fakultas_admin'] . "</td></tr>
            <tr><td>JURUSAN</td><td> : </td><td>" . $row['jurusan_admin'] . "</td></tr>
        </table>
    </div>";
}
?>

    
