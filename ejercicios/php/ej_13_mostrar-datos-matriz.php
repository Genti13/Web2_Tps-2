<?php
$diagonal_principal = diagonal($_POST['matrix'], 'principal');
$diagonal_secundaria = diagonal($_POST['matrix'], 'secundaria');
$suma_elementos = operacionMatriz($_POST['matrix'], 'suma');
include_once('../html/ej_13_mostrar-datos-matriz.html');

function diagonal($matrix, $mode)
{
    return $mode($matrix);
}

function principal($matrix)
{

    $principal = [];

    for ($i = 0; $i < count($matrix); $i++) {

        array_push($principal, $matrix[$i][$i]);
    }

    return $principal;
}

function secundaria($matrix)
{
    $secundaria = [];

    for ($i = 0; $i < count($matrix); $i++) {
        array_push($secundaria, $matrix[$i][count($matrix) - 1 - $i]);
    }

    return $secundaria;
}

function operacionMatriz($matrix, $mode)
{
    return $mode($matrix);
}

function suma($matrix)
{
    $suma = 0;
    foreach ($matrix as $row) {
        foreach ($row as $element) {
            $suma += $element;
        }
    }

    return $suma;
}
?>