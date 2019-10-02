<?php
include 'negara.php';
class sasuke extends negara
{
    private $nama = " sasuke ";

    public function asal()
    {
        return  $this->nama;
    }
}

$nama_ = new sasuke();
$negara1 = new negara();

echo $nama_->asal().$negara1->negara_sasuke();
