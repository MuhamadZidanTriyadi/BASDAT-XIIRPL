<?php 

// Penggunaan Array Menggunakan For
// For Perulangan yang akan di ulang sesuai set yang kita atur

// Variabel angka memiliki nilai pertama = 0 dan diakhiri kurang atau sama dengan 10. dihitung increment
// for ($angka = 0; $angka <= 10; $angka++){
//     echo "angkanya adalah : $angka <br>";
// }

// foreach = string, char
// Foreach mengulang sesuai nilai yang mau diambil (key)
// $warna = array("Merah","Hijau","Biru","Kuning");

// foreach ($warna as $variasi){
//     echo "berwarna : $variasi <br>";
// }

// Tugas Menerapkan For dan Foreach menggunakan PHP
$days = ["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"];

?>


<html>
    <head>
        <title>Latihan Menggunakan For dan Foreach</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        for ($hari = 0; $hari < count($days); $hari++){
            ?>
        <div class="box">
            <?php echo $days[$hari];?>
        </div>
        <?php } ?>
        <div class="clear"></div>
        <?php foreach($days as $hari_hari) { ?>
            <div class="box2">
                <?php echo $hari_hari;?>
            </div>
        <?php } ?>
    </body>
</html>