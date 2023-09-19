<?php
function fibonacciSeries($count) {
    $firstNumber = 0;
    $secondNumber = 1;

    echo "Fibonacci Series (first $count numbers): ";

    for ($i = 0; $i < $count; $i++) {
        echo $firstNumber . " ";

        $nextNumber = $firstNumber + $secondNumber;
        $firstNumber = $secondNumber;
        $secondNumber = $nextNumber;
    }
    echo PHP_EOL;
}

// Call the function
fibonacciSeries(15);

?>