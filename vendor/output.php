<?php

require_once "delete.php";
require_once "connect.php";
require_once "functions.php";
require_once "vendor/connect.php";
include "adminpanel.php";
require_once 'logic.php';


if ($true = 1) {
    $trHTML = <<<HTML
<tr></tr>
HTML;
    $htmlTable =
        <<<HTML
 
 <table border="1px solid">
   <tr>
    <th>№пп</th> <th>Пол</th> <th>Имя</th> <th>Фамилия</th> <th>Отчество</th> <th>Личный качества</th>   <th>Дата Рождения</th> <th>Усидчивый</th> <th>Трудолюбивый</th> <th>Обучаемый</th> <th>Аккуратность</th> <th>ААнг</th> <th>Фото</th>
   </tr>
 
  
 HTML;

    $buttonHTML = <<<HTML
<tr>
<td>
<button>
  <a href="delete.php">
 '.$row->id.'
</a>
</button>
</td>
</tr>
  
HTML;
//echo '<pre>';print_r($_POST);echo '</pre>';


    echo $htmlTable;

    $perseverance = filter_var($_POST['perseverance'], FILTER_SANITIZE_STRING) == "on" ? 1 : 0;
    $neatness = filter_var($_POST['neatness'], FILTER_SANITIZE_STRING) == "on" ? 1 : 0;
    $selflearning = filter_var($_POST['selflearning'], FILTER_SANITIZE_STRING) == "on" ? 1 : 0;
    $industriousness = filter_var($_POST['industriousness'], FILTER_SANITIZE_STRING) == "on" ? 1 : 0;


    $k = 0;
    $one = 1;
    $sumName = '';
    $equalOne = "=1";
    $resultStringWHERE = 'WHERE ';
    $resultStringAND = '';


    $flip = array_keys($_POST);
    $count = count($flip);
    foreach ($flip as $fli) {
        $k = $k + 1;
        if ($count > 1 && $k < $count) {
            $resultStringAND = ' AND ';
        } else {
            $resultStringAND = '';
        }

        switch ($fli) {
            case 'perseverance':
                '<pre>';
                $name = 'perseverance';
                echo '</pre>';
                break;
            case 'neatness':
                '<pre>';
                $name = 'neatness';
                '</pre>';
                break;
            case 'selflearning':
                '<pre>';
                $name = 'selflearning';
                '</pre>';
                break;
            case 'industriousness':
                '<pre>';
                $name = 'industriousness';
                '</pre>';
                break;
        }
        $sumName .= $name . $equalOne . $resultStringAND . ' ';
    }

    $resultString = $resultStringWHERE . $sumName;

    function changer($change)
    {
        if ($change = 1) {
        }
    }

    if (isset($_GET['filter'])) {
        $query = $pdo->query('SELECT * FROM  `b_fields`' . $resultString);
        while ($row = $query->fetch()) {
            echo $trHTML;
            echo $buttonHTML;
            foreach ($row as $ru) {
                $ruTransed = boolToWord($ru);
                $newHtml = <<<HTML
        <td>{$ruTransed}</td>
        HTML;
                echo $newHtml;
            }
        }
    } else {
        $query = $pdo->query('SELECT * FROM `b_fields`');
        while ($row = $query->fetch()) {
            echo $trHTML;
            echo $buttonHTML;
            foreach ($row as $ru) {
                $ruTransed = boolToWord($ru);
                $newHtml = <<<HTML
        <td>{$ruTransed}</td>
        HTML;
                echo $newHtml;
            }
        }
    }

    echo '</table>';
} else {
    echo "ЛОгин или параль не верны";
}


