<?php
// include koneksi
include '../koneksi_db.php';

// menangkap data yang ada di form
$nama = $_POST['nama'];
$no_telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['pass'];


// menginput database
$notif = mysqli_query($koneksi,"insert into anggota values('','$nama','$no_telp','$alamat','$email','$password')");
if($notif){
    ?>
    <script>
        alert('Data Berhasil Di Tambah');
        window.location='index.php';
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal Di Tambah');
        window.location='index.php';
    </script>
    <?php
}

?>