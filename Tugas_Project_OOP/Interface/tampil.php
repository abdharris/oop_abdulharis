<?php
include 'inter.php';

class tampil implements Sepatu
{

    public function tali()
    {
        echo "tali sepatu <br>";
    }

    public function kaos_kaki()
    {
        echo " Kaos kaki <br>";
    }
    
    public function warna_sepatu()
    {
       echo " warna sepatu merah <br>"; 
    }
}

$obj = new tampil();
$obj->tali();
$obj->kaos_kaki();
$obj->warna_sepatu();
