<?php
require "jenis.php";
require "pohon.php";


$jenis_tumbuhan = new jenis;
$pohon_apa = new pohon();


echo $pohon_apa->getCiri();
echo "<br> 1. " . $jenis_tumbuhan->getDaun();
echo "<br> 2. " . $jenis_tumbuhan->getRanting() . "<br>";
echo "3. " . $jenis_tumbuhan->getBatang();
