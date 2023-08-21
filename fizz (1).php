<?php
$maxNumber = 100;

for ($i = 1; $i <= $maxNumber; $i++) {

    if ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } elseif ($i % 15 == 0) {
        echo "Fizz Buzz";
    } else {
        echo $i;
    }

    echo "<br>";
}
