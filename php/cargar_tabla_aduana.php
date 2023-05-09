<?php

$i = 1;
$extraTerrestres = 0;

foreach ($data as $element) {

    echo "<tr>";
    echo "<th scope='row'>" . $i . "</th>";
    echo "<td>" . $element['nombre'] . "</td>";
    echo "<td>" . $element['planeta'] . "</td>";
    echo "</tr>";

    if ($element['planeta'] == 'tierra') {
        $extraTerrestres++;
    }

    $i++;
}

echo "<h3 class='flex-center'>Cantidad de visitantes Extraterrestres: " . $extraTerrestres . "</h3>";

?>