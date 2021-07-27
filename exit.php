<?php

unset($_SESSION['start']);
unset($_SESSION['login']);
unset($_SESSION['uset']);
session_destroy();
include 'login.php';
exit;