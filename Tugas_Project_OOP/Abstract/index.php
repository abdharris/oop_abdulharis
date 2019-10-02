<?php
include 'Oreo.php';
include 'Bolu.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$oreo = new Oreo();
echo $oreo->getWarna('Hitam');
echo "<br>";
$bolu = new Bolu();
echo $bolu->getWarna('Coklat');
