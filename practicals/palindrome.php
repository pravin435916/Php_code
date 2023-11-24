<?php

function isPalindrome($number) {
    // Convert the number to a string
    $numberStr = (string)$number;

    // Reverse the string
    $reversedStr = strrev($numberStr);

    // Check if the original and reversed strings are the same
    return $numberStr === $reversedStr;
}

// Example usage
$number = 121;

if (isPalindrome($number)) {
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}

?>
