<?php
// Pewarisan atau inheritance

// class induk
class komputer {
    // Property
    public $merk;
    public $prosesor;
    public $memory;

    // fungsi/operasi membuat beli komputer
    public function beli_komputer(){
        return "Beli Komputer Baru";
    }
}

// kelas turunan / extends dari class komputer ke class laptop
class laptop extends komputer{
    public function lihat_spek(){
        return "merk: $this->merk, prosesor: $this->prosesor, memory: $this->memory";
    }
}

?>