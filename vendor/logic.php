<?php

require_once "functions.php";
require_once "connect.php";
//if (!empty($_POST)) {
$false=0;
$true=0;
if (!empty($_POST)) {
    $loginSwitch = false;
    $login = $_POST['login'];
    $password = $_POST['password'];
    $forIndex = false;

    $query = $pdo->query('SELECT * FROM `login_fields`');

    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        $loginT = $row->login;
        $passwordT = $row->password;
        $ro = objToMass($row);//ОБЪЕКТ в МАССИВ
//        echo '<pre>';print_r($ro);echo '</pre>';
        foreach ($ro as $r) {

            if ($loginT === $login && $passwordT === $password) {
                $forIndex = true;
                $true=$true+1;
            } else {
                $forIndex = false;
                $false=$false+1;
            }
        }
        $whileIndex = true;
    }
} else {
    $whileIndex = false;
}
echo '<pre>';echo $false/5; echo'false';echo '</pre>';
echo '<pre>';echo $true/5; echo'true';echo '</pre>';
if ($whileIndex = true) {
    if ($forIndex) {
        $_SESSION['login'] = 1;
    } else {
        $loginSwitch = false;
        echo "Неверный логин или пароль";
        $_SESSION['errorpass'] = 1;
    }
} else {
    $loginSwitch = true;
    $_SESSION['loginSwitch'] = 1;
}

