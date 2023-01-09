<html>
    <head>
        <title>Update Buku</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="form">
    <h1>Update Data Buku</h1>

    <?php
    include '../koneksi_db.php';
    $id_buku = $_GET['id_buku'];
    $data = mysqli_query($koneksi, "select * from buku where id_buku ='$id_buku'");
    // Data yang susah di cocokan dengan id_buku, di MELEDAK menggunakan fetch array sehingga bisa di taro satu satu di formnya
    while($meledak = mysqli_fetch_array($data)){
    ?>

    <?php 
    
    ?>

            <form action="proses-update.php" method="post">
                <!-- ID BUKU -->
                <input type="hidden" name="id_buku" value="<?php echo $meledak['id_buku'];?>">
                <!-- ID BUKU -->
                <div class="katalog">
                <label>Id Katalog</label>
                <input type="number" name="id_katalog" value="<?php echo $meledak['id_katalog'];?>">
                </div>
                <div class="buku">
                <label>Judul Buku</label>
                <input type="text" name="judul_buku" value="<?php echo $meledak['judul_buku'];?>">
                </div>
                <div class="pengarang">
                <label>Pengarang</label>
                <input type="text" name="pengarang" value="<?php echo $meledak['pengarang'];?>">
                </div>
                <div class="tahun">
                <label>Tahun Terbit</label>
                <input type="date" name="thn_terbit" value="<?php echo $meledak['thn_terbit'];?>">
                </div>
                <div class="penerbit">
                <label>Penerbit</label>
                <input type="text" name="penerbit" value="<?php echo $meledak['penerbit'];?>">
                </div>
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