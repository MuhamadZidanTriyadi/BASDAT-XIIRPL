<?php

// cara membuat function
function ngoding(){

}

// function bisa di kategorikan menggunakan public, protected, private
class vscode {
    public function ngoding (){

    }
}

// mencoba buat fungsi sapa temen
function sapa_teman(){
    echo "<h1>Hai gais<h1>";
    echo "<h3>Ketemu lagi bersama guweh<h3>";
}

// mencoba membuat function yang ada parameter
function temen($temen_guweh, $umur){
    echo "<h2> Hey denger lagu guweh bareng {$temen_guweh}<h2>";
    echo "<h2> Umur dia segini{$umur}<h2>";
}

// cara panggil function
// tuliskan nama functionnya
sapa_teman();

// jika fungsi menggunakan parameter, harus di tulis saat pemanggilannya
temen("Rizki Billar","25");

// mengcoba membuat fungsi menggunakan percabangan
function kasir($nama,$jumlah){
    echo "<h3>Hai ($nama), Selamat Datang Di Indomaret <h3>";
    echo "<h3>Selamat Datang Kembali<h3>";

// membuat perulangan menggunakan if (jika jumlah lebih maka akan dapat hadiah)
if ($jumlah >10){
    echo "<h3>Selamat, Anda Mendapatkan Piring Emas Karena Sudah Menjadi Langganan Kami ($jumlah) Kali<h3>";
    }
}

// panggil fungsi nya dan isi parameternya
kasir ("Ajeng", 11);
?>