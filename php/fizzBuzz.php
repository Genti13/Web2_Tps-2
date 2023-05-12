<?php

for ($i = 1; $i <= 100; $i++) {
    $palabra = "";
    if ($i % 3 == 0) {
        $palabra .= "Fizz";
    }

    if ($i % 5 == 0) {
        $palabra .= "Buzz";
    }

    if($palabra == ""){
        echo "<h2 class='mx-auto'>" . $i . "</h2>";
    }else{
        echo "<h2 class='mx-auto'>" . $palabra . "</h2>";
    }
}

?>