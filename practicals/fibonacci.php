<?php

function fibonacci($n) {
    $fib = array(0, 1);
    
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    
    return $fib;
}

// Change the value of $n to generate a different number of Fibonacci numbers
$n = 10;
$result = fibonacci($n);

echo "Fibonacci sequence of first $n numbers: ";
echo implode(', ', $result);

?>
