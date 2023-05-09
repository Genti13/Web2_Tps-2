<?php

$palabra = $_POST['clave'];
$palabra .= "\0";
$texto = $_POST['texto'];
$texto .= "\0";

$cantidad = getOcurrencias($palabra, $texto);

include_once('../html/ej_15_mostrar.html');

function getOcurrencias($clave, $texto)
{
    $count = 0;

    $i = 0;
    $j = 0;
    while ($texto[$i] != "\0") {

        if (lower($clave[$j]) == lower($texto[$i])) {
            $j++;
        } else {
            $j = 0;
        }

        if ($j >= getSize($clave)) {
            $count++;
            $j = 0;
        }

        $i++;

    }

    return $count;

}

function getSize($string)
{
    $i = 0;

    while ($string[$i] != "\0") {
        $i++;
    }

    return $i;
}

function lower($char)
{
    $ASCII = ord($char);

    if ($ASCII >= 65 && $ASCII <= 90) {
        $ASCII += 32;
    }

    return chr($ASCII);
}

?>