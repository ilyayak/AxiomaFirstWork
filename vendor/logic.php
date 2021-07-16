<?php


require_once "lconnect.php";
$login = $_POST['login'];
$password = $_POST['password'];

$query = $pdo->query('SELECT * FROM `login_fields`');
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
    $loginT = $row->login;
    $passwordT = $row->password;
    $ro = json_decode(json_encode($row), true);
    foreach ($ro as $r){
    echo '<pre>';  echo $r;echo '</pre>';
        if ($loginT === $login && $passwordT === $password) {
            $forIndex = true;
            exit;
        } else {
            $forIndex = false;
        }
    }
//    echo '<pre>';  echo  $row->login;echo '</pre>';
//     echo '<pre>';echo $row->password;echo '</pre>';
    if ($forIndex = true){

        echo '<pre>';
        echo $login;
        echo '<pre>';
        echo $password;
        echo"ok";
    }else{

        echo '<pre>';
        echo $login;
        echo '<pre>';
        echo $password;
        echo"error";
    }
}

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