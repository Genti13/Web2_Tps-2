<?php

include_once('clases/ej16_clases.php');

$jugador1 = new Piedra('Jugador 1');
$jugador2 = new Papel('Jugador 2');

$resultado1 = $jugador1->competirContra($jugador2)->getGanador();

$jugador1 = new Tijera('Jugador 1');
$jugador2 = new Tijera('Jugador 2');

$resultado2 = $jugador1->competirContra($jugador2)->getGanador();

$jugador1 = new Papel('Jugador 1');
$jugador2 = new Tijera('Jugador 2');

$resultado3 = $jugador1->competirContra($jugador2)->getGanador();

include_once('../html/ej_16.html');

?>