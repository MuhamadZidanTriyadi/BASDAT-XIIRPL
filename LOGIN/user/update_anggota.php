<html>
    <head>
        <title>Update Anggota</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="form">
    <h1> Customize Profile</h1>

    <?php
    include '../koneksi_db.php';
    // Ambil dari Tombol Customize
    $id_anggota = $_GET['id_anggota'];
    // Arahkan ke id_anggota
    $data = mysqli_query($koneksi, "select * from anggota where id_anggota ='$id_anggota'");
    // Data yang susah di cocokan dengan id_anggota, di MELEDAK menggunakan fetch array sehingga bisa di taro satu satu di formnya
    while($meledak = mysqli_fetch_array($data)){
    ?>

    <?php 
    
    ?>

            <form action="proses_update.php" method="post">
                <!-- ID ANGGOTA -->
                <input type="hidden" name="id_anggota" value="<?php echo $meledak['id_anggota'];?>">
                <!-- ID ANGGOTA -->
                <div class="katalog">
                <label>Nama</label>
                <input type="text" name="nama" value="<?php echo $meledak['nama'];?>">
                <br>
                <label>No Telp</label>
                <input type="number" name="no_telp" value="<?php echo $meledak['no_telp'];?>">
                <br>
                <label>Alamat</label>
                <input type="text" name="alamat" value="<?php echo $meledak['alamat'];?>">
                <br>
                
                <label>Password</label>
                <input type="text" name="pass" value="<?php echo $meledak['password'];?>" disabled>
                <br>
                <button class="tombol_login" type="submit"><a href="index.php"></a>Submit</button>
                </div>
            </form>
            <?php
            }
            ?>
        </table>
    </body>
</html>