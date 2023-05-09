<?php

$path = '../resources/aduana_planetaria.json';
$json = file_get_contents($path);
$data = json_decode($json, true);

include_once('../html/ej_12_tabla.html');

?>