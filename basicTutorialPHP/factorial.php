<?php 



$n = 0;

for($i = $n , $factorial = 1; $i > 1 ; $i--){
    $factorial = $factorial * $i;
}


printf("Factorial of %d is %d", $n, $factorial);
echo PHP_EOL;

for ($i = $n, $factorial = 1; $i > 1; $i--){
    $factorial *= $i;
}

printf("Factorial of %d is %d", $n, $factorial);