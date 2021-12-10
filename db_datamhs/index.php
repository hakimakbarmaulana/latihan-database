<!DOCTYPE html>
<html>

    <head>
        <title>Data Mahasiswa</title>
        <style type="text/css">
        body{
            font-family: arial;
            font-size: 14px;
            background-color: #99FF99;
            background-image: url("bege.jpg");
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
            background-color: #66CC00;
        }
        #menu ul{
            list-style: none;
            margin: 0;
            padding: 0;
        }
        #menu ul li{
            display: inline-table;
        }
        #menu ul li:hover{
            background-color: #339900;
        }
        #menu ul li a{
            color: #fff;
            text-decoration: none;
            line-height: 40px;
            padding: 0 10px;
        }
        #isi{
            background-color: #ccc;
            padding-left: 20px;
            padding-top: 5px;
        }
        #tabel{
            text-align: center;
            background-color: #fff;
            padding: 20px;
        }
        #footer{
            background-color: #666;
            text-align: center;
        }
        </style>
    </head>
    <body>
        <div id="canvas">
        <div id="header">
            <h2>Basis Data Mahasiswa</h2>
        </div>
        <div id="menu">
            <ul>
                <li><a href=''>Data</a></li>
                <li><a href=''>Peminjaman</a></li>
                <li><a href=''>Pengembalian</a></li>
            </ul>
        </div>
        <div id="isi">
        <h2>Isi Data Mahasiswa</h2>
        <form method="post" action="savetbmhsdb1.php">
            <table>
                <tr><td>NIM</td><td><input type="text" name="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                <tr><td>GENDER</td><td><input type="text" name="gender"></td></tr>
                <tr><td>JURUSAN</td><td><input type="text" name="jurusan"></td></tr>
                <tr><td>ANGKATAN</td><td><input type="text" name="angkatan"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
        </div>
        <div id="tabel">
        <h2>Daftar Mahasiswa</h2>
        <table border="1">
            <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>ALAMAT</th><th>GENDER</th><th>JURUSAN</th><th>ANGKATAN</th><th>AKSI</th></tr>
            <?php
            include 'koneksidb1.php'; $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa"); $no = 1; foreach ($mahasiswa as $row) {
            echo "<tr>
            <td>$no</td>
            <td>" . $row['nim'] . "</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['alamat'] . "</td>
            <td>" . $row['gender'] . "</td>
            <td>" . $row['jurusan'] . "</td>
            <td>" . $row['angkatan'] . "</td>
            <td><a href='eduptbmhsdb1.php?nim=$row[nim]'>Edit</a>
            <a href='deltbmhsdb1.php?nim=$row[nim]'>Hapus</a>
            </td>
            </tr>"; $no++;
            }
            ?>
        </table>
        </div>
        <div id="footer">
            Copyright 2020 - Hakim Akbar
        </div>
        </div>
        
    </body>
</html>