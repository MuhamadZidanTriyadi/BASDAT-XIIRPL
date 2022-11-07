<?php

// array adalah tipe data yang berisi beberapa tipe data (string maupun integer)
// keynya diawali dengan angka 0 dst

// Array asosiatif
// Keynya berubah menjadi tipe data string

$siswa = [
    // keynya bisa int/srtring
    'sipalingganteng' => 'Asep',
    'sipalingcantik' => 'neneng',
    'sipalingnetral' => 'joko'
];

// echo "siapa yang paling ganteng? {$siswa ['sipalingganteng']}";

// Array Multidimension
// ada array di dalam array

$togel = [
    [1, 2, 3, 4, 5,],
    [6, 7, 8, 9, 22,],
    [12, 15, 13, 14, 51,],
    [19, 21, 31, 47, 35,]
];

// cara memanggil array
// echo $togel[2][4];

// Array Push
// Array Push berguna untuk menambahkan menerima 2 parameter, parameter pertama : untuk target, parameter dua : untuk nilai yang akan dimasukan

$sayur = ['bayem', 'kangkung', 'sawi'];
$buah = ['pisang', 'kelapa', 'coklat'];

// cara pertama untuk menambahkan item 
array_push($buah, 'timun');

// cara yang kedua 
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];

?>