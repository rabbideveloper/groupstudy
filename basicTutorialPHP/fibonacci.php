<?php  

$num = 0;

$veryOld = 0;  
$old = 1;  

echo "Fibonacci series for first 12 numbers: ";  
echo "\n";  
echo $veryOld.' '.$old.' ';  
while ($num < 10 )  

{
    
    $n3 = $old + $veryOld;
    echo $n3 . ' ';
    $veryOld = $old;
    $old = $n3;
    $num = $num + 1;

}


?>