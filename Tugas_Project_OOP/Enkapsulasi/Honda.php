<?php

include 'Sepeda_motor.php';

// Inheritance dari clasa sepeda_motor
class Honda extends Sepeda_motor
{
    protected $merk = "HONDA";

    //method yelyel
    public function yelyel()
    {
        return $this->merk . " One Heart :)";
    }
}

//instansiasi
$merk_motor = new Honda();


echo "<br>";

echo "<br>";
echo "<br>";
//pemanggilan method
echo $merk_motor->yelyel();
