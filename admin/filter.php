<?php
require_once "../vendor/connect.php";
echo '<ul>';
$query = $pdo->query('SELECT * FROM `b_fields` ORDER BY `skills` DESC');
while($row = $query->fetch(PDO::FETCH_OBJ)){
    echo '<li class="list"><b>'.$row->skills.'</b></li>';
}
echo '</ul>';

header("Location:/");