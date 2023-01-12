<html>
    <head>              
        <title>Data Buku</title>
        <link rel="stylesheet" href="../user/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login_admin.php?pesan=belum_login');
        }
        
        include '../koneksi_db.php';
        // Ambil data semua dari table buku
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
        
        // Jumlahkan Data yang Ada di table
        $jumlah_buku = mysqli_num_rows($buku);
        $jumlah_anggota = mysqli_num_rows($anggota);
        
        ?>
        <h1>Menampilkan Data Buku</h1>
        <h3>TOTAL ANGGOTA TERSEDIA : <?php echo $jumlah_buku; ?></h3>
        
        <center>
        <div class="card-body">
            <h4>Selamat Datang <?php include '../koneksi_db.php';echo $_SESSION['admin']?> Telah Login</h4>
            <a href="sandbox.php" class="btn btn-success" style="margin-bottom: 10px;">SandBox</a>
        <hr>
        <a href="add.php" class="btn btn-success" style="margin-bottom: 10px;">Tambah Buku</a>
        <a href="cetak_buku.php" class="btn btn-success" style="margin-bottom: 10px;">Cetak</a>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Harga</th>
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
            echo "<td>". "Rp. " . number_format($row['harga']). " ,-" . "</td>";
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
    <h3>TOTAL HARGA : 
    <?php
    $db = mysqli_query($koneksi, "SELECT * FROM buku;");
    while($r = mysqli_fetch_array($db)){
        $h[] = $r['harga'];
    }
    $totalHarga = array_sum($h);
    echo "Rp. " . number_format($totalHarga) . " ,-";
    ?>
    </h3>
    <hr>
        <center>
        <h1>Data Anggota</h1>
        <h3>TOTAL ANGGOTA TERSEDIA : <?php echo $jumlah_anggota; ?></h3>
        <a  href="add_anggota.php" class="btn btn-success" style="margin-bottom: 10px;">Tambah Anggota</a>
        <a href="cetak_anggota.php" class="btn btn-success" style="margin-bottom: 10px;">Cetak</a>
        <a  href="../logout.php" class="btn btn-primary" style="margin-bottom: 10px;">LOGOUT</a>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <br>
        <?php
        include '../koneksi_db.php';
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
        foreach ($anggota as $rou){
            echo "<tr>";
            echo "<td>".$id_anggota = $rou['id_anggota']."</td>";
            echo "<td>".$nama = $rou['nama']."</td>";
            echo "<td>".$no_telp = $rou['no_telp']."</td>";
            echo "<td>".$alamat= $rou['alamat']."</td>";
            echo "<td>".$email = $rou['email']."</td>";
            echo "<td>".$password = $rou['password']."</td>";
        
            ?>
        <!-- <h3>TOTAL HARGA : 
    <?php
    $db = mysqli_query($koneksi, "SELECT * FROM buku;");
    while($r = mysqli_fetch_array($db)){
        $h[] = $r['harga'];
    }
    $totalHarga = array_sum($h);
    echo "Rp. " . number_format($totalHarga) . " ,-";
    ?> -->
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