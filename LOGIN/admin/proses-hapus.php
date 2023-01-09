<?php
// include koneksi 
include '../koneksi_db.php';

// Menangkap data id yang di kirim dari url
$id_buku = $_GET['id_buku'];

// menghapus data dari table buku yah
$notif = mysqli_query($koneksi,"delete from buku where id_buku='$id_buku'");

// mengalihkan ke tampilan awal yah
if ($notif){
    ?>
    <script>
        alert('Berhasil Dihapus');
        window.location = "index.php";
    </script>

    <script>
        alert('Gagal Dihapus');
        window.location = "index.php"
    </script>
    <?php
}
?>