<?php

unset($_SESSION['start']);
unset($_SESSION['login']);
unset($_SESSION['uset']);
session_destroy();
header("location:/");
//include DIR_SYSTEM.'templates/login.php';
exit;