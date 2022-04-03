<?php

require_once "class_accountBank.php";

$ab1 = new AccounBank("001", 500000, "Samsul");
$ab2 = new AccounBank("002", 7500000, "Nada");

// $ab1->cetak();
// echo "<br/>";
// $ab2->cetak();
// echo "<hr/>";

// echo "Nada tranfer uang ke Samsul sebesar Rp. 100000 <br/><hr/>";
// echo "Biaya Admin Transfer: Rp" .AccounBank::$biaya_admin ."<br/>";
// $ab2->transfer($ab1, 100000);
// $ab1->cetak();
// echo "<br/>";
// $ab2->cetak();

$ar_ab = [$ab1, $ab2];
$_norek = $_POST['norek'];
$_customer = $_POST['customer'];
$_saldo = $_POST['saldo'];

 

$ab3 = new AccounBank($_norek, $_saldo, $_customer);
array_push($ar_ab, $ab3);

?>
<div class="container">
<table class="table table-striped" >
    <thead class="thead-dark">
        <tr>
            <th>NO</th>
            <th>No. Rekening</th>
            <th>Customer</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach ($ar_ab as $obj){
?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->nomor?></td>
            <td><?=$obj->customer?></td>
            <td><?=$obj->getSaldo()?></td>
        </tr>
        <?php
        $nomor++; 
        }
        ?>
    </tbody>
</table>

</div>