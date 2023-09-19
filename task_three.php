<?php

$firstNumber = 0;
$secondNumber = 1;

for ($i = 0; $i < 12; $i++) {
    // Calculate the next Fibonacci number
    $nextNumber = $firstNumber + $secondNumber;

    // Check if the next Fibonacci number is greater than 100
    if ($nextNumber > 100) {
        break;
    }

    echo $nextNumber . " ";

    // Update variables for the next iteration
    $firstNumber = $secondNumber;
    $secondNumber = $nextNumber;
}

?>