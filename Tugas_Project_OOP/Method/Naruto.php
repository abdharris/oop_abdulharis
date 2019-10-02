<?php

//class naruto
class Naruto
{
    public $negara = "konoha";

    public function kakasi()
    {
        return "kakasi berasal dari " . $this->negara;
    }
}

//instansiasi 
$naruto = new Naruto();
echo "==========================";
echo "<br>";
echo "= Tugas PHP Abdul haris - Method =";
echo "<br>";
echo "==========================";
echo "<br>";
echo "<br>";
echo $naruto->kakasi();
