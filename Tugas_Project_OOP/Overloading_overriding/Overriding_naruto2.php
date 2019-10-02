<?php
include 'Overriding_naruto.php';

class Overriding_naruto2 extends Overriding_naruto
{
    public $gerak;

    public function Gerakan($gerak)
    {
        echo $gerak . " : Sedang Melompat";
    }
}
$sakura = new Overriding_naruto2();
$naruto = new Overriding_naruto();

$naruto->Naruto('Naruto');
echo "<br>";
$sakura->Gerakan('Sakura');
