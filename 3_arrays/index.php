<?php 
// Simple Array method 1
$numbers = [1,3,5,6,7,8];
// print_r($numbers);
// or method 2

$fruits = array("apple","mango","banana");


// echo $fruits[2];

// Associative array

$person_details = [
    "first_name" => 'Prince',
    "Middle_name" => 'Ola',
    "surname" => 'Ojugbele',
    "email" => 'prince@gmail.com'

];

// echo $person_details['first_name'];

// Multi-dimensional
$persons=[
    [
        "first_name" => 'Prince',
        "Middle_name" => 'Ola',
        "surname" => 'Ojugbele',
        "email" => 'prince@gmail.com'
    
    ],
    [
        "first_name" => 'Ade',
        "Middle_name" => 'Ade',
        "surname" => 'Romola',
        "email" => 'ade@gmail.com'
    
    ],
    [
        "first_name" => 'Mofe',
        "Middle_name" => 'mofe',
        "surname" => 'Eyi',
        "email" => 'mofe@gmail.com'
    
    ],
];

echo $persons[1]['email'];
?>