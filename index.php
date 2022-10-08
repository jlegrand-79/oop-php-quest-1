<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Basics | Part 1: Faire ses premières classes</title>
</head>

<body>
    <h1>POO - Basics | Part 1: Faire ses premières classes</h1>
    <h2>Essais avec la classe 'Car'</h2>
</body>

</html>

<?php

require_once 'Car.php';
$maVoiture = new Car('sable', 5, 'diesel');

var_dump($maVoiture);

$maVoiture->setNbWheels(4);
$maVoiture->setCurrentSpeed(0);
$maVoiture->setEnergyLevel(60);

var_dump($maVoiture);

echo $maVoiture->start();
echo $maVoiture->forward();
echo $maVoiture->brake();
echo $maVoiture->start();

echo '<br> Nombre de roues : ' . $maVoiture->getNbWheels() . ' <br />' . PHP_EOL;

if ($maVoiture->getCurrentSpeed() === 0) {
    echo '<br> La voiture est à l\'arrêt. <br />' . PHP_EOL;
} else {
    echo '<br> La voiture roule actuellement à une vitesse de ' . $maVoiture->getCurrentSpeed() . ' km/h. <br />' . PHP_EOL;
}

echo '<br> Couleur de la voiture : ' . $maVoiture->getColor() . ' <br />' . PHP_EOL;

echo '<br> Nombre de sièges : ' . $maVoiture->getNbSeats() . ' <br />' . PHP_EOL;

echo '<br> Type d\'énergie : ' . $maVoiture->getEnergy() . ' <br />' . PHP_EOL;

echo '<br> Jauge de carburant : ' . $maVoiture->getEnergyLevel() . 'L <br />' . PHP_EOL;

?>
<html>
<h2>Essais avec la classe 'Bicycle'</h2>

</html>
<?php
require_once 'Bicycle.php';
$bike = new Bicycle('red', true, 15);
$bike->dump();
// $bike = new Bicycle;
// $bike->color = 'blue';
$bike->setColor('blue');
// $bike->currentSpeed = 20;
$bike->setCurrentSpeed(-1);
$bike->dump();

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h <br />';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h <br />';
echo $bike->brake();

// 2 ways of dumping object

var_dump($bike);
$bike->dump();