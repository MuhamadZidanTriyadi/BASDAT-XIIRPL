<html>
    <head>
        <title>Show data</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <!-- <center> -->
            <div class="card-body"></div>
        <h1>Menampilkan Data Anggota</h1>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>ID Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
        </tr>
<!-- menampilkan data buku -->
<?php
include '../koneksi_db.php';
$buku = mysqli_query($koneksi, "SELECT * FROM buku");
foreach ($buku as $row){
    echo "<tr>";
echo "<td>". $id = $row['id_buku']. "</td>";
echo"<td>". $id = $row['id_katalog']."</td>";
echo"<td>". $judul_buku = $row['judul_buku']."</td>";
echo"<td>". $pengarang = $row['pengarang']."</td>";
echo"<td>". $thn_terbit = $row ['thn_terbit']."</td>";
echo"<td>". $penerbit = $row ['penerbit']."</td>";
echo "</tr>";
}
        ?>
    <?php
session_start();
if($_SESSION['status']!='login'){
    header('location:login.php?pesan=belum_login');
}
?>
<h4>Selamat Datang <?php 
include '../koneksi_db.php';
$email = $_SESSION['email'];
$anggota = mysqli_query($koneksi,"select * from anggota where email ='$email'");
foreach($anggota as $nama){
    echo $nama['nama'];
}
?> Telah Masuk</h4>
<a href="../logout.php" class="btn btn-outline-danger">LOGOUT</a>
<!-- </center> -->
</table>
</body>
</html>