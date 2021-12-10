<!DOCTYPE html>
<html>

    <head>
        <title>TUGAS PRAKTIKUM</title>
    </head>
    <body>
        <div id="header">
            <h2>Tabel Data Perpustakaan</h2>
        </div>
        <div id="menu">
            <ul>     
                <li><a href='index.php?page=datamhs'>Mahasiswa</a></li>
                <li><a href='index.php?page=databuku'>Buku</a></li>
                <li><a href='index.php?page=peminjaman'>Peminjaman</a></li>
                <li><a href='index.php?page=pengembalian'>Pengembalian</a></li>
            </ul>
        </div>
        <div id="isi">
            <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];
         
                switch ($page) {
                    case 'datamhs':
                        include "datamhs.php";
                        break;
                    case 'databuku':
                        include "databuku.php";
                        break;
                    case 'peminjaman':
                        include "peminjaman.php";
                        break;
                    case 'pengembalian':
                        include "pengembalian.php";
                        break;
                    
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            }else{
                include "datamhs.php";
            }
            ?>
        </div>
        <div id="footer">
            Copyright 2020 - Hakim Akbar
        </div>
        
    </body>
</html>