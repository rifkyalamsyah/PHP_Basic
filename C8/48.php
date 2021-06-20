<?php

// Recursive Function

// Factorial Loop
function factorialLoop(int $value): int
{
    $total = 1;

    for ($i = 1; $i <= $value; $i++){
        $total *= $i;
    }

    return $total;
}

var_dump(factorialLoop(5));
var_dump(1 * 2 * 3 * 4 * 5);



// Factorial Recursive 
function factorialRecursive(int $value): int 
{
    if($value == 1){
        return 1;
    } else{
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));


// Error Recursive
// Example
function loop(int $value){
    if ($value == 0){
        echo "End Loop" . PHP_EOL;
    } else{
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(5);