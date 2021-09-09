<?php
require_once "vendor/output.php";
require_once "vendor/connect.php";

$query = $pdo->query('SELECT * FROM  `b_fields`');
$row = $query->fetch(PDO::FETCH_OBJ);
$row = objToMass($row);
echo '<pre>';print_r($row);echo '</pre>';

$boolMass = array();
foreach ($row as $ro){
    if (is_bool($ro)){
        $boolMass = array_push($boolMass,$ro);
    }
}
echo '<pre>';print_r($boolMass);echo '</pre>';
?>


<div class="detail">
    <div class="detail__img-wrap">
        <img class="detail__avatar" src="<?= $row['avatar']?>>
    </div>
    <div class="detail__info">
        <div class="detail__name"><?= $row['name']?> <?= $row['second_name']?> <?= $row['third_name']?></div>
        <div class="detail__birthdate"><?= $row['birthdate']?></div>
        <div class="detail__qualities"><?= $row['skills']?></div>
        <div class="detail__skills"><?= $row['skills']?></div>
        <div class="detail__photos">
            <img src="<?= $row['photos']?>">
        </div>
    </div>
    <a>
        <button class="detail__btn-back" href="?detail&delete">Назад к списку</button>
    </a>
</div>