<?php

// for($i = 1; $i <= 10; $i++){
//     echo $i;
//     echo PHP_EOL;
// }
// echo PHP_EOL;
// $rabbi = 0;

// while($rabbi <= 10){

//     $rabbi++;
//     echo $rabbi;
//     echo PHP_EOL;
    

// }
// $siam = 0;
// echo PHP_EOL;

// do{

//     echo $siam;
//     $siam++;
//     echo PHP_EOL;

// } while ($siam <= 10);



echo "Go to \n";

$rabbi = 0;
rabbi:

$rabbi++;
echo $rabbi . PHP_EOL;
if ($rabbi < 10)
    goto rabbi;

// for ($i = 10,$n = 1; $i > 0; $i--,$n++){
//     echo $i . ":" . (11-$i);
//     echo PHP_EOL;
//     // echo $i . ":" . $n;

//     // echo PHP_EOL;
// }
