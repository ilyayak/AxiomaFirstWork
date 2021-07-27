<?php

ob_start();
session_start();

require_once 'vendor/connect.php';
require_once 'functions.php';
require_once 'vendor/logic.php';

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>form.loc</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/structure.css">

</head>
<body>
<?php

//
//if (isset($_GET['form'])) {
//    include 'form.php';
//} elseif (isset($_GET['win'])) {
//    include 'vendor/logic.php';
//    if ($_SESSION['login'] = 1 && !isset($_SESSION['errorpass'])) {
//        include "vendor/output.php";
//    } elseif (isset($_SESSION['errorpass']) && isset($_SESSION['login'])) {
//        include 'login.php';
//    }
//} elseif (isset($_GET['filter'])) {
//    include 'vendor/logic.php';
//    if ($_SESSION['login'] = 1 && !isset($_SESSION['errorpass'])) {
//        include "vendor/output.php";
//    } elseif (isset($_SESSION['errorpass']) && isset($_SESSION['login'])) {
//        include 'login.php';
//    }
//}
//
//
//if (!isset($_GET['form']) && !isset($_GET['win']) && !isset($_GET['filter'])) {
//    include 'login.php';
//}
//
//
//if (isset($_GET['exit'])) {
//    include 'exit.php';
//    include 'login.php';
//}
//if (isset($_GET['delete'])) {
//    include 'delete.php';


if (isset($_GET['form'])) {
    include 'form.php';
} else {
    if (isset($_GET['signup'])){
        include 'vendor/signup.php';
    }
    if (!isset($_SESSION['uset'])) {
        include 'login.php';
    }

    if (isset($_GET['start']) || isset($_GET['filter'])) {
        $_SESSION['start'] = 1;
        include 'vendor/logic.php';
        if ($_SESSION['uset'] === 1) {
            include 'vendor/output.php';
        }elseif ($_SESSION['login']===2){
            echo 'неверный логин или пароль';
        }
    }
}
if (isset($_GET['exit'])) {
    include 'exit.php';
    include 'login.php';

    if (isset($_GET['delete'])) {
        include 'delete.php';
    }
}
//echo '<pre>';
//print_r($_GET);
//echo '</pre>';
//
//
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
?>

<footer id="main">
    <button class="forIndex hidden" id="forIndex"><?= $forIndex; ?></button>
</footer>
</body>
<script src="/js/main.js"></script>
<script src="/js/async.js"></script>
<script src="/js/slow.js"></script>
<script src="/js/forIndex.js"></script>
</html>
