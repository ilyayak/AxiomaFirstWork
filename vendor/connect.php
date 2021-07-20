<?php
try {
    $dsn = 'mysql:host=localhost; dbname=b_fields';
    $pdo = new PDO($dsn,'root','root');
}catch(PDOException $e){
echo "новозможно устоноветь сольдиненьие";
}


