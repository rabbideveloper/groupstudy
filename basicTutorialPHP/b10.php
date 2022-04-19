<?php 
// 4 dividable
// 100 not dividable
// 400  dividable

$year = 2011;

if($year % 4== 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "$year is leap year";
}elseif($year % 100 == 0 && $year % 400 == 0){
    echo "$year is not leap year";
}elseif($year % 4 == 0){
    echo "$year is leap year";
}else{
    echo "$year is not leap year";
}


echo "\n";

if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "$year is leap year";
}else{
    echo "$year is not leap year";
}


