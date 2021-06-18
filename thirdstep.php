<?php require_once "proto/proto.php";
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
<form action="<?=$var;?>" class="box login">
    <fieldset class="boxBody">
        <label>
            Личные качества
        </label>
        <input type="text" tabindex="1" placeholder="">
        <div class="section section__checkbox">
            <label>
                Навыки
            </label>
            <input type="checkbox">Усидчивость
            <input type="checkbox">опрятность
            <input type="checkbox">самообучаемость
            <input type="checkbox">трудолюбие
        </div>
        <a href="/secondstep.php"><-</a>
        <a href="/forthstep.php">-></a>
    </fieldset>
    <footer>

        <input type="submit" class="btnLogin" value="Login" tabindex="4">

    </footer>
</form>
<footer id="main">
</footer>
</body>
</html>
