<?php
class Overloading_pesanan
{

    public function __call($method, $pesanan)
    {
        $isi_method = array('order_1', 'order_2');

        if (in_array($method, $isi_method) == false) {
            die("<br> <br> Method tidak ada di class overloading_pesanan");
        }

        if (count($pesanan) == 2) {
            $this->order_2($pesanan[0], $pesanan[1]);
        } else if (count($pesanan) == 1) {
            $this->order_1($pesanan[0]);
        } else {
            echo "<br> unknown method";
            return false;
        }
    }
    function order_1($pesan1)
    {
        echo "<br> method order_1 : ($pesan1)";
    }
    function order_2($pesan1, $var2)
    {
        echo "<br> method order_2 :  ($pesan1,$var2)";
    }
}

$order = new Overloading_pesanan;
echo "=====================";
echo "<br>";
echo "= Tugas PHP Abdul haris =";
echo "<br>";
echo "=====================";
echo "<br>";

$order->order_1('pesanan ke-1 ');
$order->order_2('pesanan ke-2 ', ' pesanan ke-3');

$order->order_3('pesanan ke-4');
