<?php 
$strings = "Hello world";

// 1. strlen() - Get the length of a string
echo "1. Length of the string: " . strlen($strings) . "\n"; // Output: 11

// 2. str_word_count() - Count the number of words in a string
echo "2. Word count: " . str_word_count($strings) . "\n"; // Output: 2

// 3. strtoupper() - Convert a string to uppercase
echo "3. Uppercase: " . strtoupper($strings) . "\n"; // Output: HELLO WORLD

// 4. strtolower() - Convert a string to lowercase
echo "4. Lowercase: " . strtolower($strings) . "\n"; // Output: hello world

// 5. strrev() - Reverse a string
echo "5. Reversed string: " . strrev($strings) . "\n"; // Output: dlrow olleH

// 6. strpos() - Find the position of the first occurrence of a substring
echo "6. Position of 'world': " . strpos($strings, "world") . "\n"; // Output: 6

// 7. str_replace() - Replace a substring with another substring
echo "7. Replace 'world' with 'PHP': " . str_replace("world", "PHP", $strings) . "\n"; // Output: Hello PHP

// 8. substr() - Extract a part of a string
echo "8. Substring (start at 6, length 5): " . substr($strings, 6, 5) . "\n"; // Output: world

// 9. trim() - Remove whitespace or other characters from both sides of a string
$strings_with_spaces = "   Hello world   ";
echo "9. Trimmed string: '" . trim($strings_with_spaces) . "'\n"; // Output: 'Hello world'

// 10. explode() - Split a string by a specified delimiter
$parts = explode(" ", $strings);
echo "10. Exploded string: ";
print_r($parts); // Output: Array ([0] => Hello [1] => world)
?>
