<?php 

function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    // Check for divisibility from 2 to sqrt(number)
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Usage example
$number = 17;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}


?>