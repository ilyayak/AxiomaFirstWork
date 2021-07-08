<?php

require_once 'vendor/connect.php';


echo '<ul>';
$query = $pdo->query('SELECT * FROM `b_fields` ORDER BY `id` DESC');
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo '<li class="list"><b>' . $row->name . '</b><a href="/delete.php?id=' . $row->id . '"></a></li>';
}
echo '</ul>';
?>