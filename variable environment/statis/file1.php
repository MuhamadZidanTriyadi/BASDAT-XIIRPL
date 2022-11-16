<?php
// statis adalah mempertahankan nilai aslinya

$a = 5;
$b = 3;

function luas () {
  global $a, $b;

  $b = $a + $b;
}

luas();

echo "a = {$a} <br>";
echo "b = {$b} <br>";