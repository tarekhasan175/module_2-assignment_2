<?php
// Skip multiples of 5 using continue statement
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue; 
    }
    echo $i . " ";
}
?>
