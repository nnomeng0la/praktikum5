<?php

class Buah{
    public $nama;
    public $warna;
    // private $berat;

    public function __construct($nama, $warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }

    public function intro(){
        echo "Buah ini namanya : {$this->nama}, warnanya : {$this->warna}";
    }

}

class Mangga extends Buah{
    public function biji(){
        echo "<br/>Buah ini memiliki satu biji ";
    }
}
$mangga = new Mangga("Mangga", "Hijau");
$mangga->intro();
$mangga->biji();
?>