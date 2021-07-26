<?php

require_once "functions.php";
require_once "connect.php";

$second_name = filter_var($_POST['second_name'], FILTER_SANITIZE_STRING);
$third_name = filter_var($_POST['third_name'], FILTER_SANITIZE_STRING);
$birthdate = filter_var($_POST['birthdate'], FILTER_SANITIZE_STRING);
$perseverance = filter_var($_POST['perseverance'], FILTER_SANITIZE_STRING) == "on" ? 1 : 0;
$neatness = filter_var($_POST['neatness'], FILTER_SANITIZE_STRING) == "on" ? 1 : 0;
$selflearning = filter_var($_POST['selflearning'], FILTER_SANITIZE_STRING) == "on" ? 1 : 0;
$industriousness = filter_var($_POST['industriousness'], FILTER_SANITIZE_STRING) == "on" ? 1 : 0;
$male = filter_var($_POST['$male'], FILTER_SANITIZE_STRING);
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$skills = filter_var($_POST['skills'], FILTER_SANITIZE_STRING);

$avatar = $_FILES['avatar'];
$photo = $_FILES['photo'];
$photos = $_FILES['photos'];


dumpToFile($_POST);

$sql = "INSERT INTO b_fields(  `name`,
                    `skills`,
                    `second_name`,
                    `third_name`,
                    `birthdate`,
                    `perseverance`,
                    `neatness`,
                    `selflearning`,
                    `industriousness`)
                    VALUES(:name,
                    :skills,
                    :second_name,
                    :third_name,
                    :birthdate,
                    :perseverance,
                    :neatness,
                    :selflearning,
                    :industriousness
                    )";

$params =
    [
        ':name' => $name,
        ':skills' => $skills,
        ':second_name' => $second_name,
        ':third_name' => $third_name,
        ':birthdate' => $birthdate,
        ':perseverance' => $perseverance,
        ':neatness' => $neatness,
        ':selflearning' => $selflearning,
        ':industriousness' => $industriousness
    ];
$query = $pdo->prepare($sql);


$query->execute($params);

echo 'вы успешно зарегестрированы';
header("Location:/index.php");
