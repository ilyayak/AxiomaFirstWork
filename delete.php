<?php
require_once "vendor/connect.php";

$id = $_GET['id'];


$sql = 'DELETE FROM `b_fields` WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);
//По такой схеме происходит любое обращение к базе данных
//команда для субд


