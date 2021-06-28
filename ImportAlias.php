<?php

require_once "data/Confic.php";
require_once "data/Helper.php";


use Data\One\Conflict as Conflict1;
use Data\One\Conflict as Conflict2;
use function Helper\helpMe  as help;
use const Helper\APPLICATION as app;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();

echo app . PHP_EOL;