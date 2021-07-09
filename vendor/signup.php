<?php

require_once "connect.php";

$second_name = $_POST['second_name'];
$third_name = $_POST['third_name'];
$birthday = $_POST['birthday'];
$perseverance = $_POST['perseverance'];
$neatness = $_POST['neatness'];
$selflearning = $_POST['selflearning'];
$industriousness = $_POST['industriousness'];
$male = $_POST['$male'];
$name = $_POST['name'];
$skills = $_POST['skills'];

$avatar = $_FILES['avatar'];
$photo = $_FILES['photo'];
$photos = $_FILES['photos'];


//$name = 'Новая категория';
//$query = "INSERT INTO `b_fields` (`name`) VALUES (:name)";
//$params = [
//    ':name' => $name
//];
//$stmt = $pdo->prepare($query);
//$stmt->execute($params);

$sql = "INSERT INTO b_fields(  `name`,
                    `skills`,
                    `male`,
                    `second_name`,
                    `third_name`,
                    `birthday`,
                    `perseverance`,
                    `neatness`,
                    `selflearning`,
                    `industriousness`) 
                    VALUES(:name,
                    :skills,
                    :male,
                    :second_name,
                    :third_name,
                    :birthday,
                    :perseverance,
                    :neatness,
                    :selflearning,
                    :industriousness
                    )";
//$sql = "INSERT INTO `b_fields`( `second_name`, `name`
//                    )
//        VALUES
//                     (:second_name,:name
//                    )";

//$params =
//    [':name'=> $name,
//        ':second_name'=> $second_name
//
//    ]
//;
$params =
    [':name'=> $name,
        ':second_name'=> $second_name,
        ':skills' => $skills,
        ':male'=> $male,

        ':third_name'=> $third_name,
        ':birthday'=> $birthday,
        ':perseverance'=> $perseverance,
        ':neatness'=> $neatness,
        ':selflearning'=> $selflearning,
        ':industriousness'=> $industriousness
    ]
;
$query = $pdo->prepare($sql);
//$query->execute($params);

$query->execute($params);

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

header('Location:/');


//echo '<ul>';
//$query = $pdo->query('SELECT * FROM `b_fields` ORDER BY `id` DESC');
//while ($row = $query->fetch(PDO::FETCH_OBJ)) {
//    echo '<li class="list"><b>' .$row->name. '</b></li>';
//}
//echo '</ul>';
//$imagename=$_avatarS["avatar"]["name"];
//echo '<pre>';print_r($_FILES);echo '<pre>';
////Получаем содержимое изображения и добавляем к нему слеш
//$imagetmp=addslashes(file_get_contents($_FILES['file']['tmp_name']));
//
////Вставляем имя изображения и содержимое изображения в image_table
//$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";
//
//mysql_query($insert_image);

