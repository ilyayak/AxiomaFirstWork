<?php

require_once "connect.php";


$name = $_SESSION['name'];
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
echo '<pre>';
print_r($_FILES);
echo '</pre>';
var_dump($_POST);
$sql = "INSERT INTO b_fields (name, second_name,third_name,birthday,avatar,perseverance,
neatness,
selflearning,
industriousness,
photo,
photos
)
        VALUES ('$name','$second_name','$third_name','$birthday','$avatar','$perseverance',
'$neatness',
'$selflearning',
'$industriousness',
'$photo',
'$photos')";

//$imagename=$_avatarS["avatar"]["name"];
//echo '<pre>';print_r($_FILES);echo '<pre>';
////Получаем содержимое изображения и добавляем к нему слеш
//$imagetmp=addslashes(file_get_contents($_FILES['file']['tmp_name']));
//
////Вставляем имя изображения и содержимое изображения в image_table
//$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";
//
//mysql_query($insert_image);


if ($conn->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo
$sql = "SELECT * FROM b_fields";
if ($result = $conn->query($sql)) {
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>Имя</th><th>Возраст</th></tr>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row["second_name"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["third_name"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else {
    echo "Ошибка: " . $conn->error;
}
$conn->close();

?>
<!---->
<!---->
