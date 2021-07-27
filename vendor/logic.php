<?php

require_once "functions.php";
require_once "connect.php";
//if (!empty($_POST)) {
$false = 0;
$true = 0;

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

//добавление записей в базу данных
//echo '<pre>';print_r($_POST);echo '</pre>';
//$sql = "INSERT INTO login_fields( `login`,`password` )
//                    VALUES(:login,:password)";
//$params =
//    [
//        ':login' => $login,
//        ':password' => $password,
//    ];
//$query = $pdo->prepare($sql);
//$query->execute($params);
//
//$query = $pdo->query('SELECT * FROM `login_fields`');
//while ($row = $query->fetch(PDO::FETCH_OBJ)) {
//    $loginT = $row->login;
//        $passwordT = $row->password;
//       $ro = objToMass($row);
//    foreach ($ro as $r) {
//         echo $r;
//        }
//}