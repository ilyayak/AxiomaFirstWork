<?php
try {
    $dsn = 'mysql:host=localhost; dbname=b_fields';
//    $arPdoOptions = [
//        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//        PDO::ATTR_EMULATE_PREPARES   => true,
//    ];
    $pdo = new PDO($dsn,'root','root');
}catch(PDOException $e){
echo "новозможно устоноветь сольдиненьие";
}
