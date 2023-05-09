<?php

$folder = scandir("../resources/images/ej_9");
$i = 0;
foreach ($folder as $img) {

    if (pathinfo($img, PATHINFO_EXTENSION) == 'jpg') {
        echo "<img class='ej_9_image' src=/resources/images/ej_9/" . $img . " alt=" . $img . "></img>";
    }
}

?>