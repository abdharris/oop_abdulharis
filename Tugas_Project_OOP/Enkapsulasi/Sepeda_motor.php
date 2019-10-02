<?php
//class sepeda motor
class Sepeda_motor
{
    // Properties
    public $nama;
    public $warna;
    protected $merk;

    // Methods set nama motor
    function set_nama($nama)
    {
        $this->nama = $nama;
    }
    function get_nama()
    {
        return $this->nama;
    }

    //Methods set warna motor
    function set_warna($warna)
    {
        $this->warna = $warna;
    }
    function get_warna()
    {
        return $this->warna;
    }

    //Methods set merk motor
    function set_merk($merk)
    {
        $this->merk = $merk;
    }
    function get_merk()
    {
        return $this->merk;
    }
}

//Instansiasi class motor
$motor = new Sepeda_motor();
$motor->set_nama('Scoopy');
$motor->set_warna('Red');
$motor->set_merk('Honda');

echo "===================";
echo "<br>";
echo "= Tugas PHP Abdul haris =";
echo "<br>";
echo "===================";

echo "<br>";
echo "<br>";
//pemanggilan method
echo "Motor saya : " . $motor->get_nama();
echo "<br>";
//pemanggilan method
echo "Warna motor : " .  $motor->get_warna();
echo "<br>";
//pemanggilan method
echo "Merk : " .  $motor->get_merk();
