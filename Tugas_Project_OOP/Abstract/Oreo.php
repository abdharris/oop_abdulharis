<?php
include 'Roti.php';

class Oreo extends Roti
{
    public function getWarna($warna)
    {
        return "Informasi Oreo, warna : " . $warna;
    }
    public function getWarnaRoti()
    { }
}
