<?php

function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function generatePrimes($limit) {
    $primes = array();
    for ($i = 2; $i <= $limit; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

// Change the value of $limit to generate primes up to a different number
$limit = 50;
$result = generatePrimes($limit);

echo "Prime numbers up to $limit: ";
echo implode(', ', $result);

?>
