<?php
include_once('clases/ej20_clases.php');

$jugador = new Jugador();
$partida = new Partida($jugador);

//Roll 1
$partida->roll(5);
$partida->roll(6);

//Roll 2
$partida->roll(5);
$partida->roll(5);

//Roll 3
$partida->roll(5);
$partida->roll(5);

//Roll 4
$partida->roll(5);
$partida->roll(5);

//Roll 5
$partida->roll(5);
$partida->roll(5);

//Roll 6
$partida->roll(5);
$partida->roll(5);

//Roll 7
$partida->roll(5);
$partida->roll(5);

//Roll 8
$partida->roll(5);
$partida->roll(5);

//Roll 9
$partida->roll(5);
$partida->roll(5);

//Roll 10
$partida->roll(5);
$partida->roll(5);
$partida->roll(5);
$partida->roll(7);

include_once('../html/ej_20.html');


//Me volvi loco tratando de entender porque un solo array de los que se arman
//en la clase Partida tiene como primer index [""] y todos los demas [0]
//no pude encontrarle la vuelta y llegue a un punto que eran cientos de if anidados para ver si el index
//era un 0 o un "" y tampoco
//
//queria hacer esto:
//Si estaba en el segundo elemento del array fijarme el anterior, que seria index 1 - 1 = index 0,
//pero a la hora de fijarme en ese array en especifico se rompia por no ser 0
// var_dump($partida->getRondas());

?>