<?php 
/*
============= OPERATORS ===============
< less than
> greater than
<= less than or equal to
>= greater than or equal to
== equal to
=== identical to (THE VALUE AND THE VARIABLE TYPE)
!= Not equal to
!== Not identical to
*/


// =========== IF STATEMENTS ===============
// Example 1
$age = 20;

// if($age>= 18){
//     echo "You are old enough to vote!";
// }

// Example 2
$time = date("H");

// if($time < 12){
//     echo "Good morning!";
// } elseif($time > 12 && $time <17){
//     echo "Good afternoon";
// }
// else{
//     echo "Good evening!";
// }

// Example 3
$posts = ['first post', 'second post'];

// if(!empty($posts)){
// echo $posts[0];
// }else{
//     echo "No post!";
// }


// ============ TERNARY OPERATOR============
$first_post = !empty($posts) ? $posts[0] : "No post!";
// echo $first_post;


// =============== SWITCH ===================
$fav_Color = "green";

switch($fav_Color){
    case "green":
        echo "This is my favorite color!";
        break;
    case "red":
        echo "oop! You added red";
        break;
    case "blue":
        echo "oop! You added blue";
        break;
        default:
        echo "Sorry your color is not available";
}
?>