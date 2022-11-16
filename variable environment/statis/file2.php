<?php

function tes () {
  static $angka = 0; // mendefinisikan variabel lokal
// varibale lokal jika sudah melewati scopenya akan kembali ke nilai awal
// static mempertahankan nilainya diluar scope
  echo "a : {$angka} <br>";

  $angka++; // menambahkan fungsi increment
}

tes();
tes();
tes();
?>