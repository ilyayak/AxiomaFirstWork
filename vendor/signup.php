<?php

require_once "connect.php";


$name = $_POST['name'];
$second_name = $_POST['second_name'];
$third_name = $_POST['third_name'];
$birthday = $_POST['birthday'];


$sql = "INSERT INTO b_fields (name, second_name,third_name)
        VALUES ('$name','$second_name','$third_name')";

if ($conn->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>