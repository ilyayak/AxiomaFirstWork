<?php

require_once(DIR_SYSTEM . "functions.php");
require_once "connect.php";

$false = 0;
$true = 0;

if (!empty($_POST)) {
    $loginSwitch = false;
    $_SESSION['loginIn'] = $_POST['login'];
    $_SESSION['passwordIn'] = $_POST['password'];
    $forIndex = false;

    $query = $pdo->query('SELECT * FROM `login_fields`');

    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        $loginT = $row->login;
        $passwordT = $row->password;
        $ro = objToMass($row);//ОБЪЕКТ в МАССИВ

        foreach ($ro as $r) {
            if ($loginT === $_SESSION['loginIn'] && $passwordT === $_SESSION['passwordIn']) {
                $forIndex = true;
                $_SESSION['uset'] = 1;
                $true = $true + 1;
            } else {
                $forIndex = false;
                $false = $false + 1;
            }
        }
        $whileIndex = true;
    }
} else {
    $whileIndex = false;
}


$false = $false / 5;
$true = $true / 5;
if ($whileIndex = true) {
    unset($_SESSION['errorpass']);
    if ($true === 1) {
        $_SESSION['login'] = 1;
    } else {
        $loginSwitch = false;
        $_SESSION['login'] = 2;
    }
} else {
    $loginSwitch = true;
    $_SESSION['loginSwitch'] = 1;
}




