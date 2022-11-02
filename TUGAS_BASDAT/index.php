<?php
//class smkjp1

class smkjp1{
    //properti
    var $kepsek;
    var $guru;
    var $murid;

    //function
    function kepala_sekolah(){
        return "Kepsek Kita Adalah";
    }

    function gurujp (){
        return "Guru Kita Adalah";
    }

    function muridjp (){
        return "Murid Kita Adalah";
    }
}
//instansiasi 
$sekolah = new smkjp1();

//isi property
$sekolah->kepsek = "Pak Lilik";
$sekolah->guru = "Pak Saiful";
$sekolah->murid = "Zidan";

// tampilkan dari objek $sekolah
echo $sekolah->kepala_sekolah()," ",$sekolah->kepsek;
echo "<br/>";
echo $sekolah->gurujp()," ",$sekolah->guru;
echo "<br/>";
echo $sekolah->muridjp()," ",$sekolah->murid;
echo "<br/>";

