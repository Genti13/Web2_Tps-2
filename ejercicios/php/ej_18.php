<?php
include_once('clases/ej18_clases.php');

$pacman = new PacMan();
$partida = new Partida($pacman);

$fantasma = new Fantasma();
$fantasmaComestible = new FantasmaComestible();
$pildora = new Pildora();

include_once('../html/ej_18.html');

// $pacman->chocarContra($pildora);
// $pacman->chocarContra($fantasmaComestible);
// echo $partida->mostrarPuntos();
// $pacman->chocarContra($fantasma);
// echo $partida->mostrarVidas();
// $pacman->chocarContra($fantasma);
// $pacman->chocarContra($fantasma);
// $pacman->chocarContra($fantasma);

?>