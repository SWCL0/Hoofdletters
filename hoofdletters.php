<?php

echo "Typ een zin: " . PHP_EOL;
$zin = readline();

$caps = strtoupper($zin);
$lowercase = strtolower($zin);

echo $caps . PHP_EOL;
echo $lowercase . PHP_EOL;

?>