<?php
class negara
{
    private $nama_negara = "konoha";

    public function negara_sasuke()
    {
        return  $this->nama_negara;
    }
}

$negara1 = new negara();

echo $negara1->negara_sasuke();
