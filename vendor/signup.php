<?php


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

//function imageMaker($image){
//    $imageMass = array();
//    $filename = time() . $image['name'];
//    move_uploaded_file($image['tmp_name'], DIR_SYSTEM . "uploads/" . $filename);
//    $image_path = (DIR_SYSTEM . "uploads/" . $filename);
//    list($width, $height) = getimagesize($image_path);
//    $needwidth = $width / 2 - 60 / 2;
//    $needheight = $height / 2 - 60 / 2;
//    if ($width > $height) {
//        $doneWidth = 600;
//        $doneHeight = 700;
//    } else {
//        $doneWidth = 700;
//        $doneHeight = 600;
//    }
//    $newImage = imagecreatefromjpeg($image_path);
//    $avatarImage = imagecrop(
//        $newImage,
//        ['x' => $needwidth, 'y' => $needheight, 'width' => $doneWidth, 'height' => $doneHeight]
//    );
//    $resizePath = imagejpeg($avatarImage, DIR_SYSTEM . "uploads/" . $filename);
//    $imageDir = "uploads/" . $filename;
//    echo $resizePath;
//   return $resizePath;
//}
//imageMaker($avatar);

//
//foreach ($_POST as $post){
//    if (is_string($post)){
//        $done = filter_var($post,FILTER_SANITIZE_STRING);
//        $_SESSION = array_push($_SESSION ,'done');
//
//    }
//    echo $_SESSION;
//
//}

$avatar = $_FILES['avatar'];
$photos = $_FILES['photos'];

//foreach ($photo as $key => $ses){
//    echo '<pre>';echo $key;echo '</pre>';
//}

dumpToFile($_FILES);
//
//echo '<pre>';
//print_r($photos);
//echo '</pre>';
//echo '<pre>';
//print_r($avatar);
//echo '</pre>';
if (!is_dir(DIR_SYSTEM . 'uploads')) {
    mkdir(DIR_SYSTEM . 'uploads', 0777, true);
}


function validPhoto($bulk)
{
    if (isset($bulk)) {
        $format =
            [
                "image/jpeg",
                "image/png"
            ];
        if (!in_array($bulk['type'], $format)) {
            die('inncorrect file type');
            return false;
        } else {
            return true;
        }
    }
}





$fileSizeA = $avatar['size'];
$fileSizeB = $photos['size'];
$MaxSizeA = 100000;
$MaxSizeB = 1000000;

if ($fileSizeA > $MaxSizeA) {
    die('incorrect file size of Avatar');
}
if ($fileSizeB > $MaxSizeB) {
    die('incorrect file size of Photo');
}

if (isset($_GET['signup'])){

    $filenameAva = time() . $avatar['name'];
    move_uploaded_file($avatar['tmp_name'], DIR_SYSTEM . "uploads/" . $filenameAva);
    $image_pathAva = (DIR_SYSTEM . "uploads/" . $filenameAva);
    list($width, $height) = getimagesize($image_pathAva);
    $needwidth = $width / 2 - 60 / 2;
    $needheight = $height / 2 - 60 / 2;




    $newImage = imagecreatefromjpeg($image_pathAva);
    echo '<pre>';
    print_r($newImage);
    echo '</pre>';
    $avatarImage = imagecrop($newImage, ['x' => $needwidth, 'y' => $needheight, 'width' => 60, 'height' => 60]);
    echo '<pre>';
    print_r($avatarImage);
    echo '</pre>';
    $resizePath = imagejpeg($avatarImage, DIR_SYSTEM . "uploads/" . $filenameAva);
    $avatarDir = "uploads/" . $filenameAva;


    $filenamePh = time() . $photos['name'];
    move_uploaded_file($photos['tmp_name'], DIR_SYSTEM . "uploads/" . $filenamePh);
    $image_pathPh = (DIR_SYSTEM . "uploads/" . $filenamePh);
    list($width, $height) = getimagesize($image_pathPh);

    $newImage = imagecreatefromjpeg($image_pathPh);
    echo '<pre>';
    print_r($newImage);
    echo '</pre>';
    if ($width > $height) {
        $doneWidth = 600;
        $doneHeight = 700;
    } else {
        $doneWidth = 700;
        $doneHeight = 600;
    }
    $needwidth = $width / 2 - $doneWidth / 2;
    $needheight = $height / 2 - $doneHeight / 2;
    $avatarImage = imagecrop(
        $newImage,
        ['x' => $needwidth, 'y' => $needheight, 'width' => $doneWidth, 'height' => $doneHeight]
    );
    echo '<pre>';
    print_r($avatarImage);
    echo '</pre>';
    $resizePath = imagejpeg($avatarImage, DIR_SYSTEM . "uploads/" . $filenamePh);

    $photosDir = "uploads/" . $filenamePh;

    $yup = compact("avatar", "photos");
    foreach ($yup as $yu) {
        if (validPhoto($yu)) {
            echo '<pre>';
            print_r($yu);
            echo '</pre>';
            echo $yu;
            $_SESSION['JpegFormat'] = 1;
        }
    }
}

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
        ':photos' => $photosDir
    ];
$query = $pdo->prepare($sql);


$query->execute($params);

echo 'вы успешно зарегестрированы';

