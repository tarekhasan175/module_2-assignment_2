<?php

// Using For loop
function evenNumbersForLoop($start, $end, $step)
{
    // If $start is not even.
    if ($start % 2 !== 0) {
        $start++;
    }
    for ($i = $start; $i <= $end; $i += $step) {

        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    echo PHP_EOL;
}

// Call the function
echo "Using for loop: ";
evenNumbersForLoop(1, 20, 2);


// Using While loop
function evenNumbersWhileLoop($start, $end, $step)
{
    // If $start is not even.
    if ($start % 2 !== 0) {
        $start++;
    }

    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
    echo PHP_EOL;
}

// Call the function
echo "Using while loop: ";
evenNumbersWhileLoop(1, 20, 2);


// Using Do-while loop
function evenNumbersDoWhileLoop($start, $end, $step)
{
    // If $start is not even.
    if ($start % 2 !== 0) {
        $start++;
    }

    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
    echo PHP_EOL;
}

// Call the function
echo "Using do-while loop: ";
evenNumbersDoWhileLoop(1, 20, 2);

?>