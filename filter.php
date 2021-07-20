
<?php
require_once "vendor/connect.php";
$filter = $_POST["filter"];
echo '<ul>';

$query = $pdo->query("SELECT * FROM b_fields WHERE name ='.$filter.' ");
while($row = $query->fetch(PDO::FETCH_OBJ)){
    echo '<li class="list"><b>'.$row->name.'</b></li>';
}
echo '</ul>';


