<?php require_once 'inc/load.php';

// http://www.speedofanimals.com/animals/galapagos_tortoise

$tortoise = new Marathoner(300); // 0.3km/h (very slow)
$tortoise->run(5000); // 5k (~3.1 miles)

echo "Tortoise ran ".$tortoise->traveled. " meters.\n";
echo "Finish speed: ".$tortoise->getSpeed(). " meters/hr\n";

//var_export($tortoise);