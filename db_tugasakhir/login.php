<!DOCTYPE html>
<html>
<head>
	<title>Login Database</title>
	<style type="text/css">
    body{
        font-family: sans-serif;
        color: #fff;
        background-color: #00284d;
    }
    
    h1{
        padding: 10px;
        text-align: center;
        /*ketebalan font*/
        font-weight: 300;
    }
    
    .tulisan_login{
        text-align: center;
        /*membuat semua huruf menjadi kapital*/
        text-transform: uppercase;
    }
    
    .kotak_login{
        width: 350px;
        background: #ccc;
        /*meletakkan form ke tengah*/
        margin: 10px auto;
        padding: 30px 20px;
    }
    
    label{
        font-size: 11pt;
    }
    
    .form_login{
        /*membuat lebar form penuh*/
        box-sizing : border-box;
        width: 100%;
        padding: 10px;
        font-size: 11pt;
        margin-bottom: 20px;
    }

    .tombol_login{
        background: #46de4b;
        color: white;
        font-size: 11pt;
        width: 100%;
        border: none;
        border-radius: 3px;
        padding: 10px 20px;
    }
    
    .link{
        color: #232323;
        text-decoration: none;
        font-size: 10pt;
    }
    </style>
</head>
<body>
 
	<h1>LOGIN DATABASE JURNAL UB <br/> Jurusan Matematika</h1>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form method="post" action="cek.php">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="login.php">kembali</a>
			</center>
		</form>
		
	</div>
    <?php
    if(isset($_GET['cek'])){
        echo "<div><center>Username atau Password anda salah<br>Silahkan isi kembali</center></div>";
    }
    ?>
 
</body>
</html>