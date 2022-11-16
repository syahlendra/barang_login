<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login</title>
</head>
<body>
    <h2>Latihan Login XII RPL SMKN 1 SAYUNG </h2>
</br>
<!-- cek pesan notifikasi -->
<?php 
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "Login gagal! username dan password salah!";
	}else if($_GET['pesan'] == "logout"){
		echo "Anda telah berhasil logout";
	}else if($_GET['pesan'] == "belum_login"){
		echo "Anda harus login untuk mengakses halaman admin";
	}
}
?>
<br/>
<br/>
<Form  action="cek_login.php" method="POST">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Masukan Username"></td>
</tr>
<tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" placeholder="Masukan password"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="simpan"></td>
</tr>
</table>
</form>
</body>
</html>