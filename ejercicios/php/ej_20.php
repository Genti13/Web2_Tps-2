<?php
include_once('clases/ej20_clases.php');

$jugador = new Jugador();
$partida = new Partida($jugador);

var_dump($partida->FunctionName());

?>