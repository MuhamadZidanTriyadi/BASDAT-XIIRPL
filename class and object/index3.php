<?php
//class smkjp1

class smkjp1{
    //properti
    var $guru;
    var $murid;

    //function
    function berdiri(){
        return "berdiri dengan tegap";
    }

    function berlari (){
        return "berlari 1000 langkah";
    }
}
//instansiasi 
$sekolah = new smkjp1();

// Menggunakan $smkjpone
$smkjpone = new smkjp1();

//isi property
$sekolah->guru = "Pak Saipul";
$sekolah->murid = "Ahmad K";

//Menggunakan $smkjpone
$smkjpone->guru = "Pak Saipul";
$smkjpone->murid = "Ahmad K";

// tampilkan dari objek $sekolah
echo $sekolah->guru," ",$sekolah->berdiri();
echo "<br/>";
echo $sekolah->murid," ",$sekolah->berlari();
echo "<br/>";

// Menggunakan $smkjpone
echo $smkjpone->guru," ",$sekolah->berlari();
echo "<br/>";
echo $smkjpone->murid," ",$sekolah->berdiri();
?>