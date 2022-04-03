<?php

class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function isi($vol){
        $this->volume = $vol;    
    }
    public function setHarga($harga){
        $this->hargaSegelas = $harga;
    }
    public function setVolGel($VolGel){
        $this->volumeGelas = $VolGel;
    }
    public function cetakVolume(){
        echo "<br/>Kapasitas dispenser: {$this->volume}ml ";
    }
    public function cetakHargaSegelas(){
        echo "<br/>Harga Segelas: Rp.{$this->hargaSegelas} ";
    }
    public function cetakVolSegelas(){
        echo "<br/>Kapasitas Gelas: {$this->volumeGelas}ml ";
    }


}


?>