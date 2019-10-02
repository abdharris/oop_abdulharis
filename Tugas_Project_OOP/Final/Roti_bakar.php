<?php
include 'Roti.php';

class Roti_bakar extends Roti
{
    public function getRasa()
    {
        return "Rasa Coklat";
    }
}

$obj2 = new Roti_bakar();


echo "<br>" . $obj2->getTepung();
echo "<br>" . $obj2->getTelur();
echo "<br>" . $obj2->getMasak();
