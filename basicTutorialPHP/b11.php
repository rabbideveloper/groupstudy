<?php 

$condition1 = true;
$condition2 = true;
$condition3 = false;


if($condition1){
    if($condition2){
        if($condition3){
            echo "Hello";
        }else{
            echo "No 1";
        }
    }else{
        echo "No 2";
    }
}else{
    echo "No 3";
}

echo "\n";

if($condition1 && $condition2 && $condition3){
    echo "Hello";
}elseif($condition1 && $condition2){
    echo "No 1";
}elseif($condition1){
    echo "No 2";
}else{
    echo "No 3";
}