<?php
trait Hello
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait lurah
{
    public function sayPaklurah()
    {
        echo 'Paklurah';
    }
}

class paklurah
{
    use Hello, lurah;
    public function getPaklurah()
    {
        echo '!';
    }
}

$o = new paklurah();
$o->sayHello();
$o->sayPaklurah();
$o->getPaklurah();
