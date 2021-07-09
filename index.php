<!DOCTYPE HTML>
<html>
<head>
    <title>form.loc</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/structure.css">

</head>

<body>
<?php require_once 'adminpanel.php'?>
<form method="post" class="box login" enctype="multipart/form-data">
    <fieldset class="boxBody">


        <div class="block block__one" id="1">
            <select type="radio" id="male" name="male">Ваш пол
                <option value="1">М</option>
                <option value="2">Ж</option>
            </select>
            <label>Фото для Аватара</label>
            <input type="file" name="avatar" multiple>
            <input type="text" name="name"
                   placeholder="Имя">
            <input type="text" name="second_name" placeholder="Фамилия ">
            <input type="text" name="third_name" placeholder="Отчество">
            <input type="date" name="birthday" placeholder="Дата рождения">
            <button class="button buttonf__one">Дальше</button>
        </div>


        <div class="block block__two" id="2">
            <label>Личные качества</label>
            <input type="text"  name="skills" placeholder="">
            <div class="section section__checkbox">
                <label>Навыки</label>
                <input type="checkbox" name="perseverance">Усидчивость
                <input type="checkbox" name="neatness">опрятность
                <input type="checkbox" name="selflearning">самообучаемость
                <input type="checkbox" name="industriousness">трудолюбие
            </div>
            <button class="button buttonb__two">Назад</button>
            <button class="button buttonf__two">Дальше</button>
        </div>


        <div class="block block__three" id="3">
            <label>Фото для Аватара</label>
            <input type="file" name="photo">
            <button class="button buttonb__three">Назад</button>
            <button class="button buttonf__three">Дальше</button>
        </div>


        <div class="block block__four" id="4">
            <label>Загрузите фотографию</label>Назад
            <input type="file" name="photos">
            <button class="button buttonb__four">Назад</button>
        </div>

        <button  id="loadButton"> sdfgdst</button>
    </fieldset>
    <footer>
        <button type="submit" class="btnLogin" > start</button>

    </footer>
</form>
<ul class="output-main" id="result">
    <li class="output-main__item">
        <b>id</b>
    </li>
    <li class="output-main__item">
        <b>id</b>
    </li>
    <li class="output-main__item">
        <b>id</b>
    </li>
    <li class="output-main__item">
        <b>id</b>
    </li>
    <li class="output-main__item">
        <b>id</b>
    </li>
</ul>
<?php
//require_once "vendor/connect.php";
//require_once "filter.php";
//echo '<ul>';
//$query = $pdo->query('SELECT * FROM `b_fields` ORDER BY `id` DESC');
//while ($row = $query->fetch(PDO::FETCH_OBJ)) {
//    echo '<li class="list">
//          <b>' . $row->name . '</b>
//                                <br>
//                                <b>' . $row->second_name . '</b>
//                                <br>
//
//            <a href="/delete.php?id=' . $row->id . '">
//
//                    <button class="btn btn-simple">
//                        Удалить
//                    </button>
//            </a>
//           </li>';
//}
//echo '</ul>';
//?>
<footer id="main">
</footer>
</body>
<script src="/js/main.js"></script>
<script src="/js/async.js"></script>
</html>
