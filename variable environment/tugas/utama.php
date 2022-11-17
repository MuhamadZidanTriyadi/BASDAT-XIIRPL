<?php 
    // global
    require 'global.php';

    // statis
    function statis(){
        static $var = " Saya Adalah Siswa XII RPL";
        echo $var;
        $var++;
    }
    statis();

    // lokal
    $skil = " Desain";
    function lokal(){
        $skil = " Saya Bisa Coding Dan ";
        echo $skil;
    }
    lokal();
    echo $skil;

?>