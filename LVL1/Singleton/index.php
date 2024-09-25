<?php

require 'tigger.php';

$tigger = Tigger::getInstance();
$taiga = Tigger::getInstance();

$tigger->roar();

$taiga->roar();

echo $taiga->getCounter() . "<br>";

echo $tigger->getCounter();