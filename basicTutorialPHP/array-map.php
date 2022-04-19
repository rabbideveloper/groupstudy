<?php

function myFunction( $number ) {
    return ( $number * $number );
}
$a = [1, 2, 3, 4, 5];

$result = array_map( "myFunction", $a );

// print_r( $result );

// array marge

$a1 = ['red', 'a' => 'green', 'blue'];

$a2 = ['blue', 'a' => 'yellow', 'navy'];

$arrayMerge = array_merge_recursive( $a1, $a2 );

// print_r( $arrayMerge );

// array combine function

$name = ['rabbi', 'siam', 'salman', 'samia'];

$age = [20, 15, 12, 4];

// print_r( array_combine( $name, $age ) );

// Array multisort function calling

$a = array( "Dog", "Cat", "Horse", "Bear", "Zebra" );
$b = array( "name" => "rabbi", "age" => 20, "class" => "one" );
array_multisort( $b, SORT_DESC );

print_r( $b );