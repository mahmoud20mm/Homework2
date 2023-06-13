<?php 

function multiplyArrays($arr1, $arr2) {
    if (count($arr1) !== count($arr2)) {
        throw new Exception("Both arrays must have the same length.");
    }

    $result = array();
    $length = count($arr1);
    for ($i = 0; $i < $length; $i++) {
        $result[] = $arr1[$i] * $arr2[$i];
    }

    return $result;
}

$array1 = array(1, 2, 3, 4);
$array2 = array(2, 3, 4, 5);
$resultArray = multiplyArrays($array1, $array2);
print_r($resultArray);


?>