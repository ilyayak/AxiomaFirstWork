<?php


require_once 'vendor/logic.php';

if ($whileIndex) {
    if ($forIndex) {
        include "vendor/output.php";
    } else {
        $loginSwitch = false;
        echo "Неверный логин или пароль";
        include "index.php";
    }
} else {
    $loginSwitch = true;
$_SESSION['start'] = 1;
    include "index.php";
}