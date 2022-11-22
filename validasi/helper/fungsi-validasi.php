<?php

require_once 'fungsi-pesan-error.php';

function validasi (array $listinput){
    // variabel berisi inputan form
    $request = $_REQUEST;

        // memanggil semua variabel error
        $errors = [];

        // Mengakses variabel $listPesanError
        global $listPesanError;
    // perulangan untuk array terluar (berisi nama input)
    foreach ($listinput as $input => $listrules){
        echo "Periksa Input <strong>{$input}</strong><br>";
        
        // Menggunakan Foreach untuk memanggil semua fungsi yang bernama 'Lolos'
        foreach($listrules as $rules){
            echo "->rules<strong>{$input}</strong>:";
            // Panggil fungsi yang ada nama Lolosnye
            $namaFungsi = 'lolos'.ucfirst($rules);
            // validasi sesuai input formnye
            $lolos = $namaFungsi($request[$input]);
            // Buatkeun bool (lolos atau Tidak Lolos)

            // Jika tidak lolos maka munculkan pesan error
            if (!$lolos){
                if (!is_array($errors[$input])){
                    $errors += [$input => []];
                }
                array_push($errors[$input],$listPesanError[$rules]($input));
            }
            echo "<br>";
        }

        echo "<br>";
    }
    return $errors;
}

function lolosRequired($nilai){
    return(bool)$nilai;
}

// Fungsi validasi Email
function lolosEmail($nilai){
    return filter_var($nilai, FILTER_VALIDATE_EMAIL);
}

// fungsi lolos username menggunakan regex
function lolosUsername($nilai){
    preg_match("/^[[a-zA-Z0-9_]+/", $nilai, $output);
    if(count($output)){
        return $output[0] === $nilai;
    }
    return false;
}

// Fungsi Lolos usia (harus menggunakan numeric) 
function lolosnumeric($nilai){
    return is_numeric($nilai);
}
?>