<?php

class pohon
{
    public $ciri;

    public function __construct()
    {
        $this->ciri = "== Ciri - ciri Pohon Jati ==";
    }

    public function getCiri()
    {
        return $this->ciri;
    }
}
