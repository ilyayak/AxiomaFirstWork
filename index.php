<?php
require_once 'adminpanel.php';
require_once  'form.php';
require_once 'login.php';
require_once 'functions.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>form.loc</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/structure.css">

</head>
<body>
<?=$form;?>
 <?//=$login;?>
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
require_once "vendor/connect.php";
require_once "filter.php";





$query = $pdo->query('SELECT * FROM `b_fields`');
$mass = array();

while($row = $query->fetch(PDO::FETCH_OBJ)){
    $mass[] = $row;
}


// $massive = fbsql_fetch_assoc($mass);
$final_array = array();
dump($massive);

foreach ($mass as $massive)
{
    $final_array = array_merge($final_array, json_decode(json_encode($massive), true));
    dump($massive);
};


dump($final_array);

foreach ($final_array as $final_arrays){
dump($final_arrays);

if ($final_arrays["name"] == "dxfgfxcg"){
    echo "winner"?>

    <li class="block" style="color: red"> </li>


    <?php
};
}



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
?>
<footer id="main">
</footer>
</body>
<script src="/js/main.js"></script>
<script src="/js/async.js"></script>
<script src="/js/slow.js"></script>
</html>
