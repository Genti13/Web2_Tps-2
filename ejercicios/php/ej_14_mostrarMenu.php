<?php
// var_dump($_POST);
$ini_settings = parse_ini_file('../resources/menu.ini');

$comidas_elegidas = [];

foreach ($_POST as $key_post => $value) {
    array_push($comidas_elegidas, $ini_settings[$key_post]);
}

include_once('../html/ej_14_MostrarMenu.html');
?>