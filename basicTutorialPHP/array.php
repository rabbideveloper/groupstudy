<?php
// $cars = array( "Volvo", "BMW", "Toyota" );
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// An array stores multiple values in one single variable:

// $name = array("Rabbi", "Siam", "Salman", "Samia");

// echo "My name is {$name[0]}\n";
// echo "My brother name is {$name[1]} and {$name[2]}\n";
// echo "My sister name is {$name[3]}";

// // The count() function is used to return the length (the number of elements) of an array:

// $cars = array( "Volvo", "BMW", "Toyota" );
// echo count( $cars );

// $name1 = array("Rabbi", "Siam", "Salman", "Samia");

// echo count($name1);

// The index can be assigned automatically (index always starts at 0), like this:

// $cars = array( "Volvo", "BMW", "Toyota" );

// $name = array("Rabbi", "Samia", "Salman", "Siam");

// $cars[0] = "Volvo";
// $cars[1] = "BMW";
// $cars[2] = "Toyota";

// $name[0] = "Rabbi";
// $name[1] = "Samia";
// $name[2] = "Salman";
// $name[3] = "Siam";

// There are two ways to create an associative array: 

// First Ways

// $age = array( "Peter" => "35", "Ben" => "37", "Joe" => "43" );

// $name = array("Rabbi" => 20, "Salman" => 12, "Siam" => 17, "Samia"=> 4);

// Second ways

// $name["Rabbi"] = 20;
// $name["Salman"] = 12;
// $name["Siam"] = 17;
// $name["Samia"] = 4;

// The named keys can then be used in a script:

// $age = array( "Peter" => "35", "Ben" => "37", "Joe" => "43" );
// echo "Peter is " . $age['Peter'] . " years old.";


// $ageRabbi = array("Rabbi" => 20, "Salman" => 12, "Siam" => 16);

// echo "\n";

// echo "Salman is " . $ageRabbi["Salman"] . " years old";


// To loop through and print all the values of an associative array, you could use a foreach loop, like this:

// Example

// $age = array( "Peter" => "35", "Ben" => "37", "Joe" => "43" );

// foreach ( $age as $x => $x_value ) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "\n";
// }


// $age11 = array("Rabbi" => 20, "Salman" => 12, "Siam" => 15);

// foreach($age11 as $key => $agee){
//     echo "Key=" . $key . ", Value=" . $agee;
//     echo "\n";
// }

// $cars = array( "Volvo", "BMW", "Toyota" );
// rsort( $cars );

// var_dump($cars);

// Change all keys in an array to uppercase:

// $age = array( "Peter" => "35", "Ben" => "37", "Joe" => "43" );
// print_r( array_change_key_case( $age, CASE_UPPER ) );

// $age = array("Rabbi" => 20, "Samia" => 5);

// print_r(array_change_key_case($age, CASE_UPPER));

// Split an array into chunks of two:


// $cars = array( "Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel" );
// print_r( array_chunk( $cars, 2 ) );

// $name = array("Rabbi", "Siam", "Samia", "Salman", "Hasna", "Anamul");

// print_r(array_chunk($name, 2));

// $age = array( "Peter" => "35", "Ben" => "37", "Joe" => "43", "Harry" => "50","Rabbi"=>"20");
// print_r( array_chunk( $age, 2, true ) );


// Get column of last names from a record set:

// $databaseStudentList = array(
//     array(
//         "id"=> 1232,
//         "first_name"=> "Rabbi",
//         "last_name" => "Sheikh"
//     ),
//     array(
//         "id" => 1232121,
//         "first_name" => "Samia",
//         "last_name" => "Khanam",
//     ),
//     array(
//         "id" =>1223312,
//         "first_name" => "Salman",
//         "last_name" => "Sheikh"
//     )
// );


// $lastName = array_column($databaseStudentList, "first_name");

// print_r($lastName);

// Create an array by using the elements from one "keys" array and one "values" array:

// $fname = array("Rabbi", "Salman", "Siam", "Samia");

// $age = array(20, 12, 16, 5);

// print_r(array_combine($fname, $age));

// Count all the values of an array:

// $name = array("Rabbi", "Salman", "Siam", "Samia", "Anamul", "Hasna");

// print_r(array_count_values($name));

// Compare the values of two arrays, and return the differences:

$color = array("a" => "red", "b" => "green", "c" => "purple", "d" => "blue");
$color2 = array("e"=>"purple","f"=>"navy","g"=>"green");

print_r(array_diff($color, $color2));

