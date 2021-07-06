<?php

require_once "connect.php";

$male = $_POST['male'];
$name = $_POST['name'];
$second_name = $_POST['second_name'];
$third_name = $_POST['third_name'];
$birthday = $_POST['birthday'];
$avatar = $_FILES['avatar'];
$perseverance = $_POST['perseverance'];
$neatness = $_POST['neatness'];
$selflearning = $_POST['selflearning'];
$industriousness = $_POST['industriousness'];
$photo = $_FILES['photo'];
$photos = $_FILES['photos'];


//echo '<pre>';
//print_r($_FILES);
echo '</pre>';
var_dump($_POST);


$sql = "INSERT INTO b_fields (
                      male,
                      name,
                      second_name,
                      third_name,
                      birthday,
                      avatar,
                      perseverance,
                      neatness,
                      selflearning,
                      industriousness,
                      photo,
                      photos
                      );
)
        VALUES ('$male',
                '$name',
                '$second_name',
                '$third_name','$birthday',
                '$avatar','$perseverance',
                '$neatness','$selflearning',
                '$industriousness','$photo',
                '$photos'
                )";

//$imagename=$_avatarS["avatar"]["name"];
//echo '<pre>';print_r($_FILES);echo '<pre>';
////Получаем содержимое изображения и добавляем к нему слеш
//$imagetmp=addslashes(file_get_contents($_FILES['file']['tmp_name']));
//
////Вставляем имя изображения и содержимое изображения в image_table
//$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";
//
//mysql_query($insert_image);


