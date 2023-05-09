<?php

$folder = scandir("../resources/images/ej_9");
$i = 0;
foreach ($folder as $img) {

    if (pathinfo($img, PATHINFO_EXTENSION) == 'jpg') {
        echo "<a href='ej_10_img.php?nombre=" . $img . "'>$img</a>";
    }
}

?>