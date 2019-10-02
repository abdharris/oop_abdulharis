<?php

//class yamaha
class Yamaha
{
    // enkapsulasi property dengang private
    private $merk = "YAMAHA";


    // method public
    public function yelyel()
    {

        return $this->merk . " Semakin di depan...!!!";
    }
}

//instansiasi
$merk_motor = new Yamaha();

echo "=========================";
echo "<br>";
echo "= Tugas PHP Abdul haris - Class =";
echo "<br>";
echo "=========================";
echo "<br>";
echo "<br>";
echo "<br>";
//pemanggilan method
echo $merk_motor->yelyel();
