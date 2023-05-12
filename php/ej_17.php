<?php

include_once('clases/ej17_clases.php');

$resultado_1 = new Sumar(
    new Restar(new Operando(5), new Operando(3)),
    new Sumar(new Operando(3), new Operando(4))
);



$resultado_1 = $resultado_1->resolverEcuacion();

$resultado_2 = new Multiplicar(
    new Sumar(
        new Restar(new Operando(5), new Operando(3)),
        new Sumar(new Operando(3), new Operando(4))
    ),
    new Operando(2)
);

$resultado_2 = $resultado_2->resolverEcuacion();

include_once('../html/ej_17.html');

?>