<?php
class Konstanta_sepeda
{
    const MERK_1 = 'UNITED';
    const MERK_2 = 'POLYGON';

    public function merk_1()
    {
        echo self::MERK_1;
    }
    public function merk_2()
    {
        echo self::MERK_2;
    }
}

//Instansiasi class Konstanta_sepeda
$merk_sepeda = new Konstanta_sepeda();

//pemanggilan method
echo "===================";
echo "<br>";
echo "= Tugas PHP Abdul haris =";
echo "<br>";
echo "===================";
echo "<br>";
echo "<br>";

echo $merk_sepeda->merk_1();
echo " VS ";
echo Konstanta_sepeda::MERK_2;
