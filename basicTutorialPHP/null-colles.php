<?php 

$defaultNumber = 100;

$userNumber = 12;
// ternary operator
$number = isset($userNumber) ? $userNumber : $defaultNumber;

echo $number;

echo "\n";


$number = $userNumber ?? $defaultNumber;
echo $number;

echo "\n";



if(isset($userNumber)){
    echo $userNumber;
}else{
    echo $defaultNumber;
}