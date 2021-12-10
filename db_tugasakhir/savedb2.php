<?php
include 'koneksidb2.php';
// menyimpan data kedalam variabel
$page = $_GET['page'];
switch ($page){
    case 'dataadmin':
        $ID = $_POST['id_admin'];
        $Pass = $_POST['pass_admin'];
        $Nama = $_POST['Nama_admin'];
        $Fakultas = $_POST['fakultas_admin'];
        $Jurusan = $_POST['jurusan_admin'];
        // query SQL untuk insert data
        $query="INSERT INTO admin (id_admin,pass_admin,Nama_admin,fakultas_admin,jurusan_admin) VALUES ('$ID','$Pass','$Nama','$Fakultas','$Jurusan')";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=dataadmin");
        break;
    case 'datamhs':
        $Email = $_POST['EmailUB'];
        $Pass = $_POST['pass_EmailUB'];
        $Nama = $_POST['Nama_mahasiswa'];
        $NIM = $_POST['NIM'];
        $Fakultas = $_POST['fakultas_mahasiswa'];
        $Jurusan = $_POST['jurusan_mahasiswa'];
        // query SQL untuk insert data
        $query="INSERT INTO mahasiswa (EmailUB,pass_EmailUB,Nama_mahasiswa,NIM,fakultas_mahasiswa,jurusan_mahasiswa) VALUES ('$Email','$Pass','$Nama','$NIM','$Fakultas','$Jurusan')";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=datamhs");
        break;
    case 'datadosen':
        $Email = $_POST['EmailUB'];
        $Pass = $_POST['pass_EmailUB'];
        $Nama = $_POST['Nama_dosen'];
        $NIP = $_POST['NIP'];
        $Fakultas = $_POST['fakultas_dosen'];
        $Jurusan = $_POST['jurusan_dosen'];
        // query SQL untuk insert data
        $query="INSERT INTO dosen (EmailUB,pass_EmailUB,Nama_dosen,NIP,fakultas_dosen,jurusan_dosen) VALUES ('$Email','$Pass','$Nama','$NIP','$Fakultas','$Jurusan')";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=datadosen");
        break;
    case 'jurnal':
        $IDJ = $_POST['id_jurnal'];
        $Tahun = $_POST['tahun'];
        $Penulis = $_POST['nama_penulis'];
        $Judul = $_POST['judul'];
        $IDA = $_POST['id_admin'];
        $IDK = $_POST['id_kategori'];
        $ISSN = $_POST['ISSN'];
        $Halaman = $_POST['halaman'];
        // query SQL untuk insert data
        $query="INSERT INTO jurnal (id_jurnal,tahun,nama_penulis,judul,id_admin,id_kategori,ISSN,halaman) VALUES ('$IDJ','$Tahun','$Penulis','$Judul','$IDA','$IDK','$ISSN','$Halaman')";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=jurnal");
        break;
    case 'kategori':
        $ID = $_POST['id_kategori'];
        $Nama = $_POST['Nama_Kategori'];
        $Keterangan = $_POST['Keterangan'];
        // query SQL untuk insert data
        $query="INSERT INTO kategori (id_kategori,Nama_Kategori,Keterangan) VALUES ('$ID','$Nama','$Keterangan')";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=kategori");
        break;
    case 'aksesmhs':
        $NIM = $_POST['NIM'];
        $IDJ = $_POST['id_jurnal'];
        $TGL = $_POST['Tanggal_akses'];
        // query SQL untuk insert data
        $query="INSERT INTO aksess_mahasiswa (Nomor,NIM,id_jurnal,Tanggal_akses) VALUES ('','$NIM','$IDJ','$TGL')";
        mysqli_query($koneksi, $query);
        header("location:index.php?page=aksesmhs");
        break;
    case 'aksesdosen':
        $NIP = $_POST['NIP'];
        $IDJ = $_POST['id_jurnal'];
        $TGL = $_POST['Tanggal_akses'];
        // query SQL untuk insert data
        $query="INSERT INTO aksess_dosen (Nomor,NIP,id_jurnal,Tanggal_akses) VALUES ('','$NIP','$IDJ','$TGL')";
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