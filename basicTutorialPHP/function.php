<?php 

// function tabassumMama($samia){
//     echo "{$samia} My little Sister";
// }

// tabassumMama("Samia");
// tabassumMama("12");
// tabassumMama("SamiaSalman");


// function namePrint($name, $age){
//     echo "My Name Is {$name}. And My Age Is {$age}";
// }

// namePrint("Rabbi Sheikh", 20);


// echo "\n";

// function sumData( int $sum, int $rabbi){
//     echo $sum + $rabbi;
// }

// sumData(12, 32);
//  declare ( strict_types = 1 ); // strict requirement

// function addNumbers( int $a, int $b ) {
//     return $a + $b;
// }
// echo addNumbers( 5, 5 );
// since strict is enabled and "5 days" is not an integer, an error will be thrown


// function rabbiNumber($number = 100){
//     echo "That number is {$number}";

// }

// rabbiNumber(150);
// rabbiNumber();

// function rabbiName(int $num1, int $num2){
//     return $num3 = $num1 + $num2;
// }

// echo rabbiName(12, 12);

// function sum( int $x, int $y ) {
//     $z = $x + $y;
//     return $z;
// }

// echo "5 + 10 = " . sum( 5, 10 ) . "\n";
// echo "7 + 13 = " . sum( 7, 13 ) . "\n";
// echo "2 + 4 = " . sum( 2, 4 );

// function rabbi(int $num1 , int $num2){
//     $num3 = $num1 + $num2;
//     return $num3;
// }

// echo rabbi(5, 5);

// function addNumbers( float $a, float $b ): float {
//     return $a + $b;
// }
// echo addNumbers( 1.2, 5.2 );

// function rabbiFloatNumber(float $rabbi, float $siam){
//     return $samia = $rabbi - $siam;
// }

// echo rabbiFloatNumber(12.5, 12.5);


// function addNumbers( float $a, float $b ): int {
//     return (int) ( $a + $b );
// }
// echo addNumbers( 1.2, 5.2 );

// function add_five( &$value ) {
//     $value += 5;
// }

// $num = 2;
// add_five( $num );
// echo $num;


function shuvoAdd(& $rabbi){
    $rabbi += 100;
}

$number = 10;

shuvoAdd($number);

echo $number;