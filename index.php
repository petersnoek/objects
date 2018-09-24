<?php

require 'Pokemon.php';
require 'EnergyType.php';
require 'Weakness.php';
require 'Attack.php';
require 'Resistance.php';

$energyTypes = [
    new EnergyType("Lightning"),
    new EnergyType("Water"),
    new EnergyType("Fire"),
    new EnergyType("Fighting"),
];

$pok1 = new Pokemon(
    "Pikachu",
    $energyTypes[0],
    60,
    [new Attack("Electric Ring", 50),
        new Attack("Pika Punch", 20)],
    new Weakness($energyTypes[2], 1.5),
    new Resistance($energyTypes[3], 20)
);
$pok2 = new Pokemon(
    "Chameleon",
    $energyTypes[2],
    60,
    [new Attack("Head Butt", 10),
        new Attack("Flare", 30)],
    new Weakness($energyTypes[1], 2),
    new Resistance($energyTypes[0],10)
);

var_dump($pok1);
var_dump($pok2);



//$pok2 = new Pokemon("Pikachu", "Lightning", "Fire");



//$pok1->Attack($pok2);
//$pok2->Attack($pok1);
