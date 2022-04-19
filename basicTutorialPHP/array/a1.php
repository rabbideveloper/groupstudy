<?php 

$students = array(
    "rabbi",
    "siam",
    "salman",
    100,
    "samia"
);

// echo count($students);

// for($i = 0; $i< count($students);$i++){
//     echo $students[$i]."\n";
// }
$student = count($students);
for($i = $student - 1; $i>= 0; $i--){
    echo $students[$i] . "\n";
}

// foreach($students as $key => $student){
//     echo $key ."==>".$student . "\n";
// }
