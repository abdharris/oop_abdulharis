<?php
class jenis
{
    public $daun, $batang, $ranting;

    public function __construct()
    {
        $this->daun = "Daun lebar";
        $this->batang = "batang berkayu";
        $this->ranting = "sedikit memiliki ranting";
    }

    public function getDaun()
    {
        return $this->daun;
    }

    public function getBatang()
    {
        return $this->batang;
    }

    public function getRanting()
    {
        return $this->ranting;
    }
}
