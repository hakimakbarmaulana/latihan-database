<?php
include 'koneksidb2.php';
// menyimpan data kedalam variabel
$page = $_GET['page'];
switch ($page){
    case 'dataadmin':
        // menyimpan data id kedalam variabel
        $ID = $_GET['id_admin'];
        // query SQL untuk insert data
        $query="DELETE from admin where id_admin='$ID'";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=dataadmin");
        break;
    case 'datamhs':
        // menyimpan data id kedalam variabel
        $NIM = $_GET['nim'];
        // query SQL untuk insert data
        $query="DELETE from mahasiswa where NIM='$NIM'";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=datamhs");
        break;
    case 'datadosen':
        // menyimpan data id kedalam variabel
        $NIP = $_GET['nip'];
        // query SQL untuk insert data
        $query="DELETE from dosen where NIP='$NIP'";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=datadosen");
        break;
    case 'jurnal':
        // menyimpan data id kedalam variabel
        $ID = $_GET['id_jurnal'];
        // query SQL untuk insert data
        $query="DELETE from jurnal where id_jurnal='$ID'";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=jurnal");
        break;
    case 'kategori':
        // menyimpan data id kedalam variabel
        $ID = $_GET['id_kategori'];
        // query SQL untuk insert data
        $query="DELETE from kategori where id_kategori='$ID'";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=kategori");
        break;
    case 'aksesmhs':
        // menyimpan data id kedalam variabel
        $ID = $_GET['Nomor'];
        // query SQL untuk insert data
        $query="DELETE from aksess_mahasiswa where Nomor='$ID'";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=aksesmhs");
        break;
    case 'aksesdosen':
        // menyimpan data id kedalam variabel
        $ID = $_GET['Nomor'];
        // query SQL untuk insert data
        $query="DELETE from aksess_dosen where Nomor='$ID'";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=aksesdosen");
        break;	
    default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        // mengalihkan ke halaman index.php
        header("location:index.php");
        break;
}

?>