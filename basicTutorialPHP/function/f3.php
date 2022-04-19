<?php

// function sum( int $number1, int $number2, int $number3 ): int {
//     return ( $number1 + $number2 + $number3 );
// }

// echo sum( 5, 6, 7 );

// function sum( int...$numbers ): int {
//     $result = 0;
//     for ( $i = 0; $i < count( $numbers ); $i++ ) {
//         $result += $numbers[$i];
//     }
//     return $result;

// }

// echo sum( 123, 31, 21, 12 );

// Recursive function

// function printN( $i ) {
//     if ( $i >= 10 ) {
//         return;
//     }
//     echo $i . "\n";

//     $i++;

//     printN( $i );
// }

// printN( 1 );

// function printNumber( $counter, $end, $stepping = 1 ) {
//     if ( $counter > $end ) {
//         return;
//     }
//     echo $counter . "\n";
//     $counter += $stepping;

//     printNumber( $counter, $end, $stepping );
// }

// echo printNumber( 12, 50, 5 );

// Recursive function with fibonacci

// function fibonacci( $old, $new, $end ) {

//     static $start;
//     $start = $start ?? 1;

//     if ( $start > $end ) {
//         return;
//     }
//     $start++;

//     echo $old . " ";
//     $_temp = $old + $new;

//     $old = $new;
//     $new = $_temp;

//     fibonacci( $old, $new, $end );

// }

// fibonacci( 0, 1, 5 );
// $name = "Meghla";
// function doSomething() {
//     // global $name;
//     echo $GLOBALS['name'];
// }

// doSomething();

function doSomething() {
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
doSomething();
doSomething();
doSomething();