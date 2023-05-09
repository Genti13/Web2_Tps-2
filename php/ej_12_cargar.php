<?php
$nombre = $_POST['nombre'];
$planeta = $_POST['planeta'];

$path = '../resources/aduana_planetaria.json';

$json = file_get_contents($path);
$data = json_decode($json, true);

$newData = array(
    'nombre' => $nombre,
    'planeta' => $planeta
);

array_push($data, $newData);

$newjson = json_encode($data);

file_put_contents('../resources/aduana_planetaria.json', $newjson);

header('Location: ej_12_mostrar.php');

?>