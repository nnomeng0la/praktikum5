<?php
// Membuat Class
class Buah{
    public $nama;
    protected $warna;
    private $berat;

    // Membuat Fungsi/Method
    public function set_nama($n){
        $this->nama = $n;
    }
    protected function set_warna($n){
        $this->warna = $n;
    }
    private function set_berat($n){
        $this->berat = $n;
    }

}

// Percobaan 1
// Membuat Objek
$mangga = new Buah();

echo '<br/>' .$mangga->nama = "Mangga"; // Berhasil
echo '<br/>' .$mangga->warna = "Hijau"; // Error
echo '<br/>' .$mangga->berat = 7; // Error

$mango = new Buah();
$mango->set_nama("Manggo");
$mango->set_warna("Green");
$mango->set_berat(7);
?>