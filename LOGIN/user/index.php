<html>
    <head>
        <title>Anggota Page</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
    </head>
    <br>
        <center> <h3>Halaman Anggota</h3> </center> <br> <hr>
        <!-- Cek halaman apakah sudah Login atau Belum -->
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:../login.php?pesan=belum_login');
        }

        include '../koneksi_db.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");

        // jumlahkan data yang ada ditabel
        $jumlah_buku = mysqli_num_rows($buku);
        ?>

        <!-- END -->
        <center> <h4>Selamat Datang <?php
        include '../koneksi_db.php';
        $email = $_SESSION['email'];
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota where email = '$email' ");
        foreach($anggota as $nama){
            echo $nama ['nama'];
        }
        ?> anda telah Login</h4> </center>
            
            <body>
                <div class="container" style="margin-top: 80px">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <marquee direction="right"><h2>BUKU YANG TERSEDIA</h2></marquee>
                                </div>
                                <h3>TOTAL BUKU TERSEDIA : <?php echo $jumlah_buku ?></h3>
                                <div class="card-body">
            <a href="update_anggota.php?id_anggota=<?php echo $nama['id_anggota'] ?>" class="btn btn-sm btn-primary" style="margin-bottom: 10px">EDIT PROFILE</a>
            <a href="../logout.php" class="btn btn-danger" style="margin-bottom: 10px">LOGOUT</a>
            <!-- menampilkan data buku -->
            <table class="table table-bordered" id="myTable">
        <tr>
            <th>ID Buku</th>
            <th>katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>

        <!-- menampilkan data buku -->
        <?php 
        include '../koneksi_db.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>

            <td>
                <a href="keranjang.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">ADD TO CART</a>
            </td>

            <?php 
            echo "</tr>";
        }
        ?>
        

        </tbody>
        </table>
    </div>
        </div>
    </div>

</body>

</html>