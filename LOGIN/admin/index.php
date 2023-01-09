<html>
    <head>              
        <title>Data Buku</title>
        <link rel="stylesheet" href="../user/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <h1>Menampilkan Data Buku</h1>
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login_admin.php?pesan=belum_login');
        }
        ?>
        <center>
        <div class="card-body">
        <h4>Selamat Datang <?php echo $_SESSION['admin']?> Telah Login</h4>
        <a  href="add.php" class="btn btn-success" style="margin-bottom: 10px;">Tambah Buku</a>
        <a  href="add_anggota.php" class="btn btn-success" style="margin-bottom: 10px;">Tambah Anggota</a>
        <a  href="../logout.php" class="btn btn-primary" style="margin-bottom: 10px;">LOGOUT</a>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Aksi</th>

        </tr>
        <br>
        <?php
        include '../koneksi_db.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul_buku = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
    <td>
        <a href="update.php?id_buku=<?php echo $row['id_buku']?>" class="btn btn-outline-success">EDIT</a>
        <a href="proses-hapus.php?id_buku=<?php echo $row['id_buku']?>"  class="btn btn-outline-danger">HAPUS</a>    
    </td>

    <?php
            echo "</tr>";
        }
        ?>
        </center>
        </table>
    </div>
        <br>
    </body>
    </html>