<?php

$listPesanError = [
    'required' => function($field){
        return "Field ($field) harus di isi";
        // Pesan Error Jika tidak di isi
    },
    'email' => function($field){
        return "Field ($field) harus berupa email yang valid";
        // Pesan error jika isinya belum ada a kiong
    },
    'username' => function($field){
        return "Field ($field) hanya boleh angka huruf dan underscore";
        // Pesan Error Jika isinya regex
    },
    'numeric' => function($field){
        return "Field ($field) harus berupa angka";
        // Pesan Error muncul jika isinya huruf
    }
]


?>