<?php require_once "proto/proto.php";
session_start();
;?>
<!DOCTYPE HTML>
<html>
<head>
    <title>form.loc</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>
<form action="/vendor/signup.php" method="post" class="box login">
    <fieldset class="boxBody">

        <select type="radio" id="male" name="male">Ваш пол
            <option value="1">М</option>
            <option value="2">Ж</option>
        </select>
        <label>
            Фото для Аватара
        </label>
        <input type="file" name="file" multiple>
        <input type="text" name="name" placeholder="Имя" >
        <input type="text" name="second_name" placeholder="Фамилия " >
        <input type="text" name="third_name" placeholder="Отчество" >
        <input type="date" name="birthday" placeholder="Дата рождения" >
        <?=$proto;?>
        <a href="./secondstep.php">-></a>
    </fieldset>
    <footer>
            <input type="submit" class="btnLogin" value="start">
    </footer>
</form>
<footer id="main">
</footer>
</body>
</html>
