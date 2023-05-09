<?php

$dir = '../resources/images/ej_9/';

if (isset($_FILES['image']) && isset($_POST['name'])) {
    move_uploaded_file($_FILES['image']['tmp_name'], $dir . basename($_POST['name']) . '.jpg');
}

header('Location: ej_9.php');


?>