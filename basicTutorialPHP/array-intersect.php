<?php

$color = ["a" => "red", "b" => "green", "g" => "blue", "d" => "yellow"];

$color2 = ["a" => "red", "f" => "green", "g" => "blue"];

$arrayIntersect = array_intersect_assoc( $color, $color2 );

print_r( $arrayIntersect );