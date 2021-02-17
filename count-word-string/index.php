<?php


/** dung for de duyet */
function countChar($arr1, $character)
{
    $count = 0;
    $arr = str_split($arr1);
    $arrLength = count($arr);

    for ($i = 0; $i < $arrLength; $i++) {
        if ($arr[$i] === $character) {
            $count++;
        }
    }

    return $count;
}


function countStr($str, $strChild)
{
    $count = 0;
    $arr = str_split($str);
    $childLength = strlen($strChild);

    for ($i = 0; $i <= count($arr) - $childLength; $i++) {
        if (substr($str, $i, $childLength) === $strChild) {
            $count++;
        }
    }
    return $count;
}

/**     chuyen doi chuoi thanh mang va duyet bang for*/


$str = "this is my string , that is your string";
echo countChar($str, "s");
echo '<br>';
echo countStr($str, "string");
echo '<br>';

/**     dung ham substr_count   */

$count1 = substr_count($str, "s");
$count2 = substr_count($str, "string");
echo "<br> dung ham substr_count: " . $count1;
echo "<br>";
echo "<br> dung ham substr_count: " . $count2;