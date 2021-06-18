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
            Фото для Аватара
        </label>

        <input type="file" name="file">

        <div class="paginator">
            <a href="/firststep.php">
                <-
            </a>
            <a href="/thirdstep.php">
                ->
            </a>
        </div>

    </fieldset>
    <footer>
        <input type="submit" class="btnLogin" value="Login" tabindex="4">

    </footer>
</form>
<footer id="main">
</footer>
</body>
</html>
