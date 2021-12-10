<!DOCTYPE html>
<html>

    <head>
        <title>TUGAS AKHIR</title>
        <style type="text/css">
        body{
            font-family: arial;
            font-size: 14px;
            background-color: #00284d;
        }
        #canvas{
            width: 960px;
            margin: 0 auto;
            border: 1px solid silver;
            background-color: #fff;
        }
        #header{
            text-align: center;
            font-size: 20px;
            background-color: #fff;
        }
        #menu{
            background-color: #0099FF;
        }
        #menu ul{
            list-style: none;
            margin: 0;
            padding: 0;
        }
        #menu ul li.utama{
            display: inline-table;
        }
        #menu ul li:hover{
            background-color: #003399;
        }
        #menu ul li a{
            color: #fff;
            text-decoration: none;
            line-height: 40px;
            padding: 0 10px;
        }
        .utama ul{
            display: none;
            position: absolute;
            z-index: 2;
        }
        .utama:hover ul{
            display: block;
        }
        .utama ul li{
            display: block;
            background-color: #00CCFF;
            width: 140px;
        }
        #isi{
            background-color: #ccc;
            padding-left: 20px;
            padding-top: 5px;
            min-height: 400px;
            padding-bottom: 20px;
        }
        #footer{
            background-color: #666;
            text-align: center;
            padding: 5px;
        }
        </style>
    </head>
    <body>
        <div id="canvas">
        <div id="header">
            <h2>Basis Data JURNAL UB</h2>
        </div>
        <div id="menu">
            <ul>
                <li class="utama"><a href='index.php?page=profil'>Profil</a></li>
                <li class="utama"><a href=''>Data</a>
                    <ul>
                        <li><a href='index.php?page=dataadmin'>Admin</a></li>
                        <li><a href='index.php?page=datamhs'>Mahasiswa</a></li>
                        <li><a href='index.php?page=datadosen'>Dosen</a></li>
                    </ul>
                </li>
                <li class="utama"><a href='index.php?page=jurnal'>Jurnal</a></li>
                <li class="utama"><a href='index.php?page=kategori'>Kategori</a></li>
                <li class="utama"><a href=''>Riwayat Akses</a>
                    <ul>
                        <li><a href='index.php?page=aksesmhs'>Mahasiswa</a></li>
                        <li><a href='index.php?page=aksesdosen'>Dosen</a></li>
                    </ul>
                </li>
                <li class="utama"><a href='login.php'>Log Out</a></li>
            </ul>
        </div>
        <div id="isi">
            <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];
         
                switch ($page) {
                    case 'dataadmin':
                        include "halaman/dataadmin.php";
                        break;
                    case 'datamhs':
                        include "halaman/datamhs.php";
                        break;
                    case 'datadosen':
                        include "halaman/datadosen.php";
                        break;
                    case 'jurnal':
                        include "halaman/jurnal.php";
                        break;
                    case 'kategori':
                        include "halaman/kategori.php";
                        break;
                    case 'aksesmhs':
                        include "halaman/aksesmhs.php";
                        break;
                    case 'aksesdosen':
                        include "halaman/aksesdosen.php";
                        break;	
                    case 'editadmin':
                        include "updadmindb2.php";
                        break;
                    case 'editmhs':
                        include "updmhsdb2.php";
                        break;
                    case 'editdosen':
                        include "upddosendb2.php";
                        break;
                    case 'editjurnal':
                        include "updjurnaldb2.php";
                        break;
                    case 'editkategori':
                        include "updkategoridb2.php";
                        break;
                    case 'editaksesmhs':
                        include "updaksesmhsdb2.php";
                        break;
                    case 'editakses':
                        include "updaksesdosendb2.php";
                        break;	
                    case 'profil':
                        include "halaman/profil2.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            }else{
                echo "<center><h3>Selamat Datang!<br>Anda berhasil login sebagai ADMIN</h3></center>";
                include "halaman/dataadmin.php";
            }
            ?>
        </div>
        <div id="footer">
            Copyright 2020 - Kelompok 3 Sistem Basis Data
        </div>
        </div>
        
    </body>
</html>