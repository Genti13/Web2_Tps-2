<?php
$dice = $_POST['nro_dados'];
$acum_dice = 0;

echo '<main class="flex-center dice_container">';

for ($i = 0; $i < $dice; $i++) {
    $dice_nro = rand(1, 6);
    echo "<img src='/resources/images/ej_11/dado_" . $dice_nro . ".png' alt='dado_" . $dice_nro . "'>";
    $acum_dice += $dice_nro;
}

echo  '</main>';

echo "<h3 class='pt-2 flex-center'>Su puntaje es: " . $acum_dice . "</h3>";
?>