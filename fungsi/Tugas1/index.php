<?php

function orang($kertas,$jumlah,$harga){
    echo "<h2> Saat Aku Menggunakan {$kertas}<h2>";
    echo "<h2> Aku Gunakan {$harga} Satu Lembar<h2>";
    echo "<h2> {$harga} Harganya {$jumlah}<h2>";

}

    orang ('Tisu','2000','Satu Lembar');

    $a = ['Saat','Aku','Menggunakan','Tisu'];
    $b = ['Aku','Gunakan','Satu','Lembar','Satu','Lembar'];
    $c = ['Satu','Lembar','Harganya','2000'];
    
    $kalimat1 = count($a);
    $kalimat2 = count($b);
    $kalimat3 = count($c);

    var_dump($kalimat1);
    echo "<br>";
    var_dump($kalimat2);
    echo "<br>";
    var_dump($kalimat3);