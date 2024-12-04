<?php 
// These are built in php functions
$fruits = ['apple','orange','pear'];

// Get the lenght of the array
// echo count($fruits);


// search array
// var_dump(in_array('apple',$fruits));


// Add item to the end of an array
$fruits[] = 'grape';
// print_r($fruits);

// using array_push
array_push($fruits,'berry'); // end 
// print_r($fruits);

// Add item to the begining of an array
array_unshift($fruits,'mango'); //begining
// print_r($fruits);


// To remove from the end and begining of an array
array_shift($fruits); //begining
array_pop($fruits); //end
// print_r($fruits);


// to take out from any part of the array
unset($fruits[2]);
// print_r($fruits);

// splitting into chunks
$chunked_array = array_chunk($fruits,2);
// print_r($chunked_array);


// concatenation

$arr1 = [1,2,3];
$arr2 = [4,5,6];

// $arr3 = array_merge($arr1,$arr2);
// print_r($arr3);

// using spread operator
$arr4 = [...$arr1, ...$arr2 ];
// print_r($arr4);


// combining arrays key-value pairs
$color= ['green','red','yellow'];
$fruitsB = ['avocado','apple','banana'];

$combin_fruitsB = array_combine($color,$fruitsB);
// print_r($combin_fruitsB);

// Range and Map
$numbers = range(1, 20);
// print_r($numbers);

$new_Numbers = array_map(function($number) {
    return "Number " . $number;
}, $numbers);

// Print the resulting array to see the output
print_r($new_Numbers);

?>