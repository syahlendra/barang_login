<?php
include ("koneksi.php");
?>
<html>
    <head></head>
    <body>
        <h1>table</h1>
        <h4><a href ="tambah.php">table</a></h4>
        <table border=1>
            <tr>
                <th>nama</th>
                <th>alamat</th>
                
            </tr>
            <?php
            include ("koneksi.php");
            $sql = "SELECT * FROM barang";
            $query = mysqli_query($db, $sql);

            while($barang=mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$barang['id']."</td>";
                echo "<td>".$barang['nama']."</td>";
                echo "<td>".$barang['alamat']."</td>";
                echo "<td>";
                echo "<a href='edit-barang.php?id=".$barang['id']."'>Edit</a> ||";
                echo "<a href='hapus-barang.php?id=".$barang['id']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>