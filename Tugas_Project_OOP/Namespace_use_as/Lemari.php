<?php

include('Celana.php');
include('Baju.php');


class Lemari
{
    public function lemari()
    {
        return "di dalam Lemari Kaca ada : ";
    }
}



$celana = new Celana();
$baju = new Lemari_naruto\Baju();
$lemari = new Lemari();

echo $lemari->lemari();
echo "<br>";
echo $celana->celana_sasuke();
echo "<br>";
echo $baju->baju_naruto();
