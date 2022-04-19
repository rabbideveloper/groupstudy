<?php 

$number = 13;

if($number % 2 == 0){
    echo "Even Number";
}else{
    echo "Odd number";
}

echo "\n";

if ($number % 2 == 0) : 
    echo "$number is an Even number\n";
    echo "Hello I am PHP learning";
else: 
    echo "$number is an Odd number";
endif;
echo PHP_EOL;

switch($number % 2==0): 
    case 0: 
        echo "Omg This Number is Even Number";
        break;
    default: 
        echo "This number is Odd number";
endswitch;


