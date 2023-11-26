<?php

class Practical {
    /**
     * Print "Hello, World!"
     */
    public static function printHello() {
        echo "Hello, World!";
    }

    /**
     * Add two numbers.
     * @param int $num1
     * @param int $num2
     * @return int The sum of $num1 and $num2
     */
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    /**
     * Generate a Fibonacci sequence.
     * @param int $n The number of elements in the Fibonacci sequence.
     * @return array The Fibonacci sequence.
     */
    public static function generateFibonacciSequence($n) {
        $sequence = [0, 1];

        for ($i = 2; $i < $n; $i++) {
            $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2];
        }

        return $sequence;
    }
}
