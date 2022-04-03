<?php

class Account{

    public $nomor;
    protected $saldo;

    function __construct($no, $saldo){
        $this->nomor = $no;
        $this->saldo=$saldo;
    }

    function deposit($uang){
        $this->saldo = $this->saldo + $uang;

    }

    function withdraw($uang){
        $this->saldo = $this->saldo - $uang;
    }

    function cetak(){
        echo 'Nomor Account : ' .$this->nomor;
        echo '<br/>Saldonya : Rp. ' .$this->saldo;
    }
}


?>