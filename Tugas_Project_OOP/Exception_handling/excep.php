<?php
//create function with an exception
function nilai($number)
{
    if ($number > 10) {
        throw new Exception("Nilai anda kurang, tambah lagi ");
    }
    return true;
}
//trigger exception in a "try" block
try {
    nilai(5);
    //If the exception is thrown, this text will not be shown
    echo 'Selamat nilai anda < 10';
}
//catch exception
catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
