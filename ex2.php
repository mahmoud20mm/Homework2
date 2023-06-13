<?php

function findLongestString(array $strings, &$index): string {
    $longestString = '';
    $index = -1;

    foreach ($strings as $key => $string) {
        if (strlen($string) > strlen($longestString)) {
            $longestString = $string;
            $index = $key;
        }
    }

    return $longestString;
}

$strings = ['apple', 'banana', 'pear', 'kiwi'];
$index = -1;

$longestString = findLongestString($strings, $index);

echo "The longest string is: $longestString\n";
echo "It is located at index: $index\n";


?>