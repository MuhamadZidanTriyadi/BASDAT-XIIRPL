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
    // ambil property dari class komputer
    public function lihat_spek(){
        return "merk: $this->merk, prosesor: $this->prosesor, memory: $this->memory";
    }
}
// instasiasi
// membuat objek baru dari class Laptop (kelas turunan)
$laptop_baru = new laptop ();

// isi propertynya
$laptop_baru->merk = "Asus";
$laptop_baru->prosesor = "AMD Ryzen 9X";
$laptop_baru->memory = "1 PetaByte";

// panggil functionnya
echo $laptop_baru->beli_komputer();
echo "<br/>";
echo $laptop_baru->lihat_spek();


?>