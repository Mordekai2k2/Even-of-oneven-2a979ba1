<?php
echo "Vul een getal in\n";
$getal = readline();
echo "Het getal is\n ", $getal;

$getalrest = ($getal % 2);

if ($getalrest > 0)
    echo "\nDit getal is oneven";

if ($getalrest == 0)
echo "\nDit getal is even";