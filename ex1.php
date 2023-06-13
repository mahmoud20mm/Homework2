<?php 

function Odd($numbers) {
    $result = array();

    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            $result[] = $number;
        }
    }

    return $result;
}

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$result = Odd($numbers);
print_r($result);



?>