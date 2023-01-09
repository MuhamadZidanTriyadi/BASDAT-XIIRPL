<html>
    <head>
        <title>Table Buku</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="data">
        <h1>Data Buku</h1>
        <a href="index.php">Tambah Data</a>
        <table border="1">
        <tr>
            <th>ID Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>
        </div>
        <!-- menampilkan data buku -->
        <?php
        include 'koneksi.php';
        $buku = mysqli_query($koneksi, "select * from buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$id_katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul_buku = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>"; 
        ?>
            <td><a href="proses-hapus.php?id_buku=<?php echo $row['id_buku']?>">Hapus</a></td> 
        <?php
            echo "</tr>";
        }
        ?>   
        </table>
    </body>
</html>