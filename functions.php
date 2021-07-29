<?php

function get_categories($link)
{
    $sql = 'SELECT * FROM b_fields';
    $result = mysqli_query($link, $sql);
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}


function dump($var, $return = false)
{
    if ($return) {
        ob_start();
    }

    $flComplex = (is_array($var) || is_object($var));

    if ($flComplex && !$return) {
        echo "<pre>";
    }

    var_dump($var);

    if ($flComplex && !$return) {
        echo "</pre>";
    }
    echo($return ? "\n" : "<br />");

    if ($return) {
        return ob_get_clean();
    }

    return null;
}

function dumpToFile($var, $fileName = "")
{
    if (empty($fileName)) {
        $fileName = "__log.log";
    }

    $data = dump($var, true);

    $tempFile = fopen($_SERVER["DOCUMENT_ROOT"] . "/" . $fileName, "a");
    fwrite($tempFile, $data . "\n");
    fclose($tempFile);
}

function boolToWord($bar)
    // 1 и 0 превращает в ДА и НЕТ соответственно
{
    if (isset($bar)) {
        if (is_numeric($bar)) {
            if ($bar == 1) {
                $bar = "да";
            } elseif ($bar == 0) {
                $bar = "нет";
            }
        }
    }

    return $bar;
    echo $bar;
}

function objToMass($var)
    //превращает объект в массив
{
    $rowMassive = json_decode(json_encode($var), true);
    return $rowMassive;
}