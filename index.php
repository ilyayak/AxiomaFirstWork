<?php


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
if ($loginSwitch) {
    include 'form.php';

} else {
 include 'login.php';
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
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
