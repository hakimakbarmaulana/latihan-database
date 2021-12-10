<?php
include 'koneksidb1.php';
// menyimpan data kedalam variabel
$NIM = $_POST['nim'];
$Nama = $_POST['nama'];
$Alamat = $_POST['alamat'];
$Gender = $_POST['gender'];
$Jurusan = $_POST['jurusan'];
$Angkatan = $_POST['angkatan'];
// query SQL untuk insert data
$query="INSERT INTO mahasiswa (nim,nama,alamat,gender,jurusan, angkatan) VALUES ('$NIM','$Nama','$Alamat','$Gender','$Jurusan','$Angkatan')";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>