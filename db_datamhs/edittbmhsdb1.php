<?php
include 'koneksidb1.php';
// menyimpan data kedalam variabel
$NIM = $_POST['nim'];
$Nama = $_POST['nama'];
$Alamat = $_POST['alamat'];
$Gender = $_POST['gender'];
$Jurusan = $_POST['jurusan'];
$Angkatan = $_POST['angkatan'];
// query SQL untuk update data
$query="UPDATE mahasiswa SET nama='$Nama', alamat='$Alamat', gender='$Gender', jurusan='$Jurusan', angkatan='$Angkatan' where nim='$NIM'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>