<?php

echo "Typ een zin: " . PHP_EOL;
$zin = readline();

$caps = strtoupper($zin);
$lowercase = strtolower($zin);
$allFirstCaps = ucwords($zin);
$firstCaps = ucfirst($zin);

echo $caps . PHP_EOL;
echo $lowercase . PHP_EOL;
echo $allFirstCaps . PHP_EOL;
echo $firstCaps . PHP_EOL;

?>