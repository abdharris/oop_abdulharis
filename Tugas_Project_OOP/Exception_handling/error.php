<?php
function nilai($number)
{
    if ($number > 1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}
//trigger exception
nilai(5);
