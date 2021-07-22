<?php

require_once "delete.php";
require_once "connect.php";
require_once "functions.php";
require_once "vendor/connect.php";
include "adminpanel.php";

$trHTML = <<<HTML
<tr></tr>
HTML;
$htmlTable =
    <<<HTML
 
 <table border="1px solid">
   <tr>
    <th>№пп</th> <th>Пол</th> <th>Имя</th> <th>Фамилия</th> <th>Отчество</th> <th>Навыки</th>   <th>Дата Рождения</th> <th>Усидчивый</th> <th>Обучаемый</th> <th>Трудолюбие</th> <th>Аккуратность</th> <th>ААнг</th> <th>Фото</th>
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

echo $htmlTable;

$query = $pdo->query('SELECT * FROM `b_fields`');
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo $trHTML;
    $ruk = objToMass($row);
    echo $buttonHTML;
    foreach ($ruk as $ru) {
        $ruTransed = boolToWord($ru);
        $newHtml = <<<HTML
        <td>{$ruTransed}</td>
        HTML;
        echo $newHtml;
    }
}
echo '</table>';

