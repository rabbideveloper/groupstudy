<?php
include_once "f2.php";
$num = 11;

if ( isEven( $num ) ) {
    echo "{$num} is even number.";
} else {
    echo "{$num} is odd number";
}
echo "\n";

$x = 5;

echo "Factorial number {$x} is " . factorial( $x );