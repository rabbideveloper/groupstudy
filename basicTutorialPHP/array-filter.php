<?php

$filterArrayCheck = ["name" => '', "meName" => "rabbi", "a" => null, "c" => 0];

print_r( $filterArrayCheck );

echo "Array Filter Values\n";

$filterArrayCheckValue = array_filter( $filterArrayCheck );

print_r( $filterArrayCheckValue );