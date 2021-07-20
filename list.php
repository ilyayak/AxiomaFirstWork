<?php


require_once 'vendor/logic.php';


if ($whileIndex) {
 include "vendor/output.php";
} else {
    $loginSwitch = true;
    echo '<div class="loginError">Неверный логин или пароль<div>';
    include "index.php";
}


?>