<?php

require_once(DIR_SYSTEM . "functions.php");
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


function filter_mas($bulk)
{
    foreach ($bulk as $bul) {
    }
}

$avatar = $_FILES['avatar'];
$photo = $_FILES['photo'];
$photos = $_FILES['photos'];

$_SESSION['file'] = $photo;
//foreach ($photo as $key => $ses){
//    echo '<pre>';echo $key;echo '</pre>';
//}

dumpToFile($_FILES);

echo '<pre>';
print_r($photo);
echo '</pre>';
echo '<pre>';
print_r($avatar);
echo '</pre>';
if (!is_dir(DIR_SYSTEM . 'uploads')) {
    mkdir(DIR_SYSTEM . 'uploads', 0777, true);
}



$filename = time() . $photo['name'];
move_uploaded_file($photo['tmp_name'], DIR_SYSTEM . "uploads/" . $filename);
$photoDir = "uploads/" . $filename;
echo $photoDir;

$filename = time() . $avatar['name'];
move_uploaded_file($avatar['tmp_name'], DIR_SYSTEM . "uploads/" . $filename);
$avatarDir = "uploads/" . $filename;
echo $avatarDir;

$filename = time() . $photos['name'];
move_uploaded_file($photos['tmp_name'], DIR_SYSTEM . "uploads/" . $filename);
$photosDir = "uploads/" . $filename;
echo $photosDir;


$sql = "INSERT INTO b_fields(  `name`,
                    `skills`,
                    `second_name`,
                    `third_name`,
                    `birthdate`,
                    `perseverance`,
                    `neatness`,
                    `selflearning`,
                    `industriousness`,
                     `avatar`,
                     `photo`,
                     `photos`)
                    VALUES(:name,
                    :skills,
                    :second_name,
                    :third_name,
                    :birthdate,
                    :perseverance,
                    :neatness,
                    :selflearning,
                    :industriousness,
                    :avatar,     
                    :photo,
                    :photos
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
        ':industriousness' => $industriousness,
        ':avatar' => $avatarDir,
        ':photo' => $photoDir,
        ':photos' => $photosDir
    ];
$query = $pdo->prepare($sql);


$query->execute($params);

echo 'вы успешно зарегестрированы';

