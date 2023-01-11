<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
    </head>
    <body>
        <h1>Cart</h1>
        <h3>Keranjang Anda Terisi : </h3>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>ID Buku</th>
            <th>katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
        
        <?php

        include '../koneksi_db.php';
        $id_buku = $_GET['id_buku'];
        $data = mysqli_query($koneksi, "select * from buku where id_buku = '$id_buku'");
        foreach ($data as $buku)
            echo "<tr>";
            echo "<td>". $buku['id_buku']. "</td>";
            echo "<td>". $buku['id_katalog']."</td>";
            echo "<td>". $buku['judul_buku']."</td>";
            echo "<td>". $buku['pengarang']."</td>";
            echo "<td>". $buku['thn_terbit']."</td>";
            echo "<td>". $buku['penerbit']."</td>";
            echo "</tr>";
        ?>
        </tr>
        <table></table>
    </body>
</html>