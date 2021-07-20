<?php

require_once "vendor/connect.php";
require_once 'functions.php';
require_once "vendor/logic.php";
$startSwitch = false;
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
if (!$startSwitch && !$loginSwitch){
    include 'login.php';
}else {
    include 'form.php';
}
//if (isset($loginSwitch)) {
//    if ($loginSwitch) {
//
//    }
//}
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
