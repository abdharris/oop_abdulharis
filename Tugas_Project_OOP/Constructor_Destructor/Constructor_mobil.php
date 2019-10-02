<?php

class Constructor_mobil
{
  private $name = 'Huracan';
  private $merk = 'Lamborghini';

  public function mobil()
  {
    echo " Saya memiliki mobil $this->name dengan merk $this->merk";
  }
  // destructor
  public function __destruct()
  {
    echo '<br> Ini adalah destruktor.';
  }
  // constructor
  public function __construct()
  {
    echo "=====================";
    echo "<br>";
    echo "= Tugas PHP Abdul haris =";
    echo "<br>";
    echo "=====================";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo 'Ini adalah konstruktor. <br>';
  }
}
// membuat object $mobil_saya
$mobil_saya = new Constructor_mobil();
// panggil method dari object $mobil_saya

echo $mobil_saya->mobil();
