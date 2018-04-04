<?php

require_once '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();
$helloWorld = new SayHello();

echo $hello->talk() . '<br>';

echo $helloWorld::world() . '<br>';
echo SayHello::world();
