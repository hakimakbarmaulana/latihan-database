<?php
include 'koneksidb2.php';
$uname=$_POST["username"];
$pass=$_POST["password"];
$query="SELECT COUNT(*) FROM datalogin WHERE usnm='$uname' AND pass='$pass'";
$cek=mysqli_query($koneksi, $query);foreach ($cek as $row) {$cek1=$row['COUNT(*)'];
echo $cek1;
if($cek1==1){
    session_start();
    $_SESSION['username']=$uname;
    $query2="SELECT COUNT(*) FROM `admin` WHERE id_admin='$uname' AND pass_admin='$pass'";
    $cek2=mysqli_query($koneksi, $query2);foreach ($cek2 as $row1) {$cek3=$row1['COUNT(*)'];
    echo $cek3;
    if($cek3==1){
        $_SESSION['profil']='adm';
        header("location:index.php");
    }
    else{
        $query3="SELECT COUNT(*) FROM dosen WHERE EmailUB='$uname' AND pass_EmailUB='$pass'";
        $cek3=mysqli_query($koneksi, $query3);foreach ($cek3 as $row2) {$cek4=$row2['COUNT(*)'];
        echo $cek4;
        if($cek4==1){
            $_SESSION['profil']='dsn';
            header("location:index2.php?p=1");
        }
        else{
            $_SESSION['profil']='mhs';
            header("location:index2.php?p=2");
        }    
    }
    }
    }  
}
else{
    header("location:login.php?cek=eror");
}
}
?>