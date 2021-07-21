<?php


require_once "connect.php";
//if (!empty($_POST)) {

if (!empty($_POST)){
    $loginSwitch = false;
    $login = $_POST['login'];
    $password = $_POST['password'];
    $forIndex = false;

    $query = $pdo->query('SELECT * FROM `login_fields`');

    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        $loginT = $row->login;
        $passwordT = $row->password;
        $ro = json_decode(json_encode($row), true);//ОБЪЕКТ в МАССИВ

        foreach ($ro as $r) {
            if ($loginT === $login && $passwordT === $password) {
                $forIndex = true;
            } else {
                $forIndex = false;
            }
        }

        $whileIndex = true;

    }
}else{
    $whileIndex= false;
}



//}
// else {
//    $temp = false;
//    include 'secondIndex.php';
//}


//include "../list.php";


//
//$sql = "INSERT INTO `login_fields`( `login`, `password`)
//        VALUES
//                     (:login,:password)";
//
//$params =
//    [
//        ':login' => $login,
//        ':password' => $password
//
//
//    ];
//
//$query = $pdo->prepare($sql);
////$query->execute($params);
//
//$query->execute($params);
//header("Location:/");


//$login = $_POST("login");
//$password = $_POST("password");
//echo array($login, $password);

?>