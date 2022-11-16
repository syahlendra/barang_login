<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login</title>
</head>
<body>
    <h2>Halaman Admin</h2>

    <br/>
<p>
<html>
    <head></head>
    <body>
        <h1>bantuan BLT PALA BAPAK KAU</h1>
        <form action="proses_tambah.php" method="POST">

<fieldset>

<p>
<html>
    <head></head>
    <body>
        <h1></h1>
        <form action="proses-tambah.php" method="POST">

<fieldset>

<p>
            <label for="nama">Nama Barang : </label>
            <input type="text" name="nama" />
        </p>
        <p>
            <label for="stok">Stok Barang : </label>
            <input type="number" name="stok" />
        </p>
        <p>
            <label for="harga">Harga Barang : </label>
            <input type="text" name="harga" />
        </p>
        <p>
            <input type="submit" value="Tambah Barang" name="tambah" />
        </p>

        </fieldset>

    </form>
    </body>
</html>
</p>

        </fieldset>

    </form>
    </body>
</html>
</p>

    <?php
    session_start();
    if($_SESSION['status']=="login"){
        header("location:index.php?pesan=belum_login");
    }
    ?>

    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

    <br/>
    <br/>

    <a href="logout.php">LOGOUT</a>
    
</body>
</html>