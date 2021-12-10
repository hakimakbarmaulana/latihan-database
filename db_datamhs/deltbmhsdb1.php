<?php
include 'koneksidb1.php';
// menyimpan data id kedalam variabel
$NIM = $_GET['nim'];
// query SQL untuk insert data
$query="DELETE from mahasiswa where nim='$NIM'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>