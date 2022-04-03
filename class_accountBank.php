<?php
require_once "class_account.php";

class AccounBank extends Account{
    public $customer;
    static $biaya_admin = 6500;
     
    function __construct($nomor, $saldo, $customer){
        parent::__construct($nomor, $saldo);
        $this->customer = $customer;
    }

    function transfer($ab_tujuan, $uang){
        $ab_tujuan->deposit($uang); // Uang accont bank bertambah saldo
        $this->withdraw($uang); // Saldo akun ini berkurang
        $this->withdraw(self::$biaya_admin);
    }
    function cetak(){
        parent::cetak(); // Panggil function milik parent
        echo '<br/> Customer : ' .$this->customer;
    }
    public function getSaldo(){
        return $this->saldo;
    }
}

?>