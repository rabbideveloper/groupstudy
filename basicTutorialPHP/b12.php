<?php 

$number = -1;

$result = $number % 2;

// switch ($result){
//     case 0 : 
//         switch($number){
//             case $number > 0:
//                 echo "$number is positive even number";
//                 break;
//             case $number < 0:
//                 echo "$number is negative even number";
//                 break;
//         }
//         break;
//     default : 
//         switch($number){
//             case $number > 0:
//                 echo "$number is positive odd number";
//                 break;
//             case $number < 0:
//                 echo "$number is negative odd number";
//         }
// }

// switch($result){
//     case 0: 
//         switch($number){
//             case $number > 0:
//                 echo "$number is a positive even number";
//                 break;
//             case $number < 0:
//                 echo "$number is a negative even number";
//                 break;
//         }
//         break;
//     default: 
//        switch($number){
//             case $number > 0:
//                 echo "$number is a positive odd number";
//                 break;
//             case $number < 0:
//                 echo "$number is a negative odd number";
//        }
// }

// switch (true){
//     case ($result == 0 && $number > 0) : 
//         echo "$number is positive even number";
//         break;
//     case ($result == 0 && $number < 0):
//         echo "$number is negative even number";
//     case ($result == 1 && $number > 0) : 
//         echo "$number is positive odd number";
//         break;
//     case ($result == -1 && $number < 0):
//         echo "$number is negative odd number";
// }



switch (true){
    case ($result == 0 && $number > 0):
        echo "$number is a positive even number";
        break;
    case ($result == 0 && $number < 0):
        echo "$number is a negative even number";
        break;
    case ($result == 1 && $number > 0):
        echo "$number is a positive odd number";
        break;
    case ($result == -1 && $number < 0):
        echo "$number is a negative odd number";
}