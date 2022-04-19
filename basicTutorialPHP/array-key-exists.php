<?php

$array = ["name" => "Rabbi", "age" => "20"];

if ( array_key_exists( "name", $array ) ) {
    echo "Name key is exists";
} else {
    echo "Name key is not exists";
}

echo "\n";
print_r( array_keys( $array, "20" ) );