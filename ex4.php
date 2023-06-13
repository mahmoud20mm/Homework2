<?php 

function factorial($n) {
    if ($n < 0) {
        return null; // Factorial is not defined for negative numbers
    }
    
    $result = 1;
    
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    
    return $result;
}

$number = 5;
$factorial = factorial($number);
echo "The factorial of $number is: $factorial";


?>