<?php
include 'koneksidb2.php';
$uname=$_POST["username"];
$pass=$_POST["password"];
$query="SELECT COUNT(*) FROM datalogin WHERE usnm='$uname' AND pass='$pass'";
$cek=mysqli_query($koneksi, $query);foreach ($cek as $row) {$cek1=$row['COUNT(*)'];
echo $cek1;
if($cek1==1){
    $query2="SELECT COUNT(*) FROM `admin` WHERE id_admin='$uname' AND pass_admin='$pass'";
    $cek2=mysqli_query($koneksi, $query2);foreach ($cek2 as $row1) {$cek3=$row1['COUNT(*)'];
    echo $cek3;
    if($cek3==1){
        header("location:coba.php");
    }
    else{
        header("location:coba2.php");
    }
    }  
}
else{
    header("location:index.php");
}
}
?>