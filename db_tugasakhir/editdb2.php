<?php
include 'koneksidb2.php';
// menyimpan data kedalam variabel
$page = $_GET['page'];
switch ($page){
    case 'dataadmin':
        $ID1 = $_POST['id_admin1'];
        $ID = $_POST['id_admin'];
        $Pass = $_POST['pass_admin'];
        $Nama = $_POST['Nama_admin'];
        $Fakultas = $_POST['fakultas_admin'];
        $Jurusan = $_POST['jurusan_admin'];
        // query SQL untuk insert data
        $query="UPDATE `admin` SET id_admin='$ID',pass_admin='$Pass',Nama_admin='$Nama',fakultas_admin='$Fakultas',jurusan_admin='$Jurusan' WHERE id_admin='$ID1'";
        mysqli_query($koneksi, $query);
        // mengalihkan ke halaman index.php
        header("location:index.php?page=dataadmin");
        break;
    case 'datamhs':
        $NIM1 = $_POST['NIM1'];
        $Email = $_POST['EmailUB'];
        $Pass = $_POST['pass_EmailUB'];
        $Nama = $_POST['Nama_mahasiswa'];
        $NIM = $_POST['NIM'];
        $Fakultas = $_POST['fakultas_mahasiswa'];
        $Jurusan = $_POST['jurusan_mahasiswa'];
        // query SQL untuk insert data
        $query="UPDATE mahasiswa SET EmailUB='$Email',pass_EmailUB='$Pass',Nama_mahasiswa='$Nama',fakultas_mahasiswa='$Fakultas',jurusan_mahasiswa='$Jurusan',NIM='$NIM' WHERE NIM='$NIM1'";
        mysqli_query($koneksi, $query);
        // mengalihkan ke halaman index.php
        header("location:index.php?page=datamhs");
        break;
    case 'datadosen':
        $NIP1 = $_POST['NIP1'];
        $Email = $_POST['EmailUB'];
        $Pass = $_POST['pass_EmailUB'];
        $Nama = $_POST['Nama_dosen'];
        $NIP = $_POST['NIP'];
        $Fakultas = $_POST['fakultas_dosen'];
        $Jurusan = $_POST['jurusan_dosen'];
        // query SQL untuk insert data
        $query="UPDATE dosen SET EmailUB='$Email',pass_EmailUB='$Pass',Nama_dosen='$Nama',fakultas_dosen='$Fakultas',jurusan_dosen='$Jurusan',NIP='$NIP' WHERE NIP='$NIP1'";
        mysqli_query($koneksi, $query);
        // mengalihkan ke halaman index.php
        header("location:index.php?page=datadosen");
        break;
    case 'jurnal':
        $IDJ1 = $_POST['id_jurnal1'];
        $IDJ = $_POST['id_jurnal'];
        $Tahun = $_POST['tahun'];
        $Penulis = $_POST['nama_penulis'];
        $Judul = $_POST['judul'];
        $IDA = $_POST['id_admin'];
        $IDK = $_POST['id_kategori'];
        $ISSN = $_POST['ISSN'];
        $Halaman = $_POST['halaman'];
        // query SQL untuk insert data
        $query="UPDATE jurnal SET tahun='$Tahun',nama_penulis='$Penulis',judul='$Judul',id_admin='$IDA',id_kategori='$IDK',ISSN='$ISSN',halaman='$Halaman',id_jurnal='$IDJ' WHERE id_jurnal='$IDJ1'";
        mysqli_query($koneksi, $query);
        // mengalihkan ke halaman index.php
        header("location:index.php?page=jurnal");
        break;
    case 'kategori':
        $ID1 = $_POST['id_kategori1'];
        $ID = $_POST['id_kategori'];
        $Nama = $_POST['Nama_Kategori'];
        $Keterangan = $_POST['Keterangan'];
        // query SQL untuk insert data
        $query="UPDATE kategori SET Nama_Kategori='$Nama',Keterangan='$Keterangan',id_kategori='$ID' WHERE id_kategori='$ID1'";
        mysqli_query($koneksi, $query);
        // mengalihkan ke halaman index.php
        header("location:index.php?page=kategori");
        break;
    case 'aksesmhs':
        $ID1 = $_POST['Nomor1'];
        $ID = $_POST['Nomor'];
        $NIM = $_POST['NIM'];
        $IDJ = $_POST['id_jurnal'];
        $TGL = $_POST['Tanggal_akses'];
        // query SQL untuk insert data
        $query="UPDATE aksess_mahasiswa SET NIM='$NIM',id_jurnal='$IDJ',Tanggal_akses='$TGL',Nomor='$ID' WHERE Nomor='$ID1'";
        mysqli_query($koneksi, $query);
        // mengalihkan ke halaman index.php
        header("location:index.php?page=aksesmhs");
        break;
    case 'aksesdosen':
        $ID1 = $_POST['Nomor1'];
        $ID = $_POST['Nomor'];
        $NIP = $_POST['NIP'];
        $IDJ = $_POST['id_jurnal'];
        $TGL = $_POST['Tanggal_akses'];
        // query SQL untuk insert data
        $query="UPDATE aksess_dosen SET NIP='$NIP',id_jurnal='$IDJ',Tanggal_akses='$TGL',Nomor='$ID' WHERE Nomor='$ID1'";
        mysqli_query($koneksi, $query);
        // mengalihkan ke halaman index.php
        header("location:index.php?page=aksesdosen");
        break;			
    default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        // mengalihkan ke halaman index.php
        header("location:index.php");
        break;
}
?>