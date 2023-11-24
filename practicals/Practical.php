// practicals/Practical.php

/**
 * Class Practical
 * Contains static functions for practical purposes.
 */
class Practical {
    /**
     * Prints "Hello, World!"
     */
    public static function printHello() {
        echo "Hello, World!";
    }

    /**
     * Adds two numbers and returns the sum.
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    /**
     * Generates Fibonacci sequence containing 'n' integers.
     * @param int $n
     * @return array
     */
    public static function generateFibonacciSequence($n) {
        $fib = array(0, 1);

        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }

        return $fib;
    }
}
