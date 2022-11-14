<?php

// prosedural adalah pemograman yang tidak perlu adanya instansiasi, cukup menggunakan fungsi

// Contoh dari Prosedural
echo date('d-m-y');//membuat fungsi tanpa  ada objek

// Contoh dari pendekatan objek
$date = new DateTime();//objek
echo $date ->format('d-m-y');


?>