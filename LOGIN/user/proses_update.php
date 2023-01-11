<?php
// include koneksi
include '../koneksi_db.php';

// Variable yang menyambungkan dari form update ke mysqli query
$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];


// menginput database
$input= mysqli_query($koneksi," update anggota set nama = '$nama', no_telp = '$no_telp', alamat = '$alamat' where id_anggota ='$id_anggota'");
if($input){
    ?>
    <script>
        alert('Data Berhasil Dirubah');
        window.location='index.php'; 
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal Dirubah');
        window.location='index.php';
    </script>
    <?php
}

?>