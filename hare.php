<?php require_once 'inc/load.php';

// http://www.speedofanimals.com/animals/rabbit

$hare = new Sprinter(48000); // 48 kph (29.8 mph)
$hare->run(5000); // 5k (~3.1 miles)

echo "Hare ran ".$hare->traveled. " meters.\n";
echo "Finish speed: ".$hare->getSpeed(). " meters/hr\n";

//var_export($hare);