<?php 

// for($i = 0; $i < 100; $i++){
//     // if ($i % 7 == 0)
//     //     echo $i . "\n";
//     // if ($i % 11 == 0)
//     //     echo $i . "\n";

//     echo $i % 7 == 0 ? $i . "\n" : '';
//     echo $i % 11 == 0 ? $i . "\n" : '';
// }


// for($i = 0, $j = 0; $i < 100; $i += 7, $j += 11){
//     echo $i . "\n";
//     echo $j . "\n";
// }

// $rabbi = 0;

// while($rabbi < 10){
//     echo $rabbi . "\n";
//     $rabbi++;
// }

// echo "==========\n";

// $j = 0;
// while($j++ < 5){
//     echo $j ."\n";
// }

// echo "===========\n";

// $j = 0;

// while(++$j < 5){
//     echo $j . "\n";
// }


// break
for($i = 20; $i < 50 ; $i++){
    if($i % 13 == 0){
        echo $i . "\n";
        // break;
    }
}

// continue

for ( $i = 20; $i < 50; $i++ ) {

    if ( $i < 28 ) {
        continue;
    }
    echo $i . "\n";

}