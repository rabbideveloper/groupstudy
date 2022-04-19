<?php 

// Logical Operator == != && ||
// $n = 3;

// if($n % 2 == 0){
//     echo "$n is even number";
// }else{
//     echo "$n is odd number";
// }

// if($n > 10){
//     echo "$n is greater than 10";
// }else{
//     echo "$n is less than 10";
// }


// $m = 10;
// $n = 1;

// if($m != $n){
//     echo "$m not equal to $n";
// }

// $rabbi = 100;

// $siam = 200;

// if($rabbi == $siam){
//     echo "Rabbi has same amount of money as Siam..";
// }elseif($rabbi > $siam){
//     echo "Rabbi has more amount as siam...";
// }elseif($rabbi < $siam){
//     echo "Rabbi has less money as siam...";
// }

// $age = 14;

// if($age >= 13 && $age <= 18){
//     echo "This person is teenager";
// }else{
//     echo "This person is not teenager";
// }

$food = "apple";

if("Tuna" == $food || "salmon" == $food){
    echo "$food has provided vitamin D";
}elseif("apple" == $food){
    echo "This is Apple and I love apple...";
}else{
    echo "We don't know contains vitamin D..";
}
