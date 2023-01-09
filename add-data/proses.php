<?php
// include koneksi
include 'koneksi.php';

// menangkap data yang ada di form
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

// menginput database
mysqli_query($koneksi,"insert into anggota values('','$nama','$no_telp','$alamat','$email','')");

// Mengembalikan ke halaman awal
header("location:tambah.php");
?>