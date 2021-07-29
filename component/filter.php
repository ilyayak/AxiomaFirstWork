<?php

require_once DIR_SYSTEM."vendor/connect.php";
require_once DIR_SYSTEM."vendor/output.php";
if (isset($_GET['filter'])) {
}
echo $htmlTable;

$query = $pdo->query('SELECT * FROM `b_fields` WHERE perseverance = 1 AND selflearning = 1');
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