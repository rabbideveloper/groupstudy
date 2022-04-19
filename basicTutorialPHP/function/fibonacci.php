<?php

function fibonacci( $first, $second, $last ) {
    static $start;
    $start = $start ?? 1;

    if ( $start > $last ) {
        return;
    }
    $start++;

    echo $first . " ";
    $_temp = $first + $second;
    $first = $second;
    $second = $_temp;

    fibonacci( $first, $second, $last );

}

fibonacci( 0, 1, 9 );