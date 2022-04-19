<?php

  $string = 'Hello World';

// Get the length of a string
echo strlen($string);
echo '<br>';

// Find the position of the first occurence of a substring in a string
echo strpos($string , 'o');
echo '<br>';

//Find the position of the last occurence of a substring in a string
echo strrpos($string, 'o');
echo '<br>';

// Reverse a string
echo strrev($string);
echo '<br>';

// Convert all characters to lowercase
echo strtolower($string);
echo '<br>';

// Convert all characters to uppercase
echo strtoupper($string);
echo '<br>';

// String replace
echo str_replace('World', 'Everyone', $string);
echo '<br>';

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo '<br>';
echo substr($string, 5);
echo '<br>';

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}
echo '<br>';

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YEES!';
}
echo '<br>';


// Other stuff
$string2 = '<h1>Hello</h1>';
echo ($string2);
echo '<br>';

$string2 = '<h1>Hello</h1>';
echo htmlspecialchars($string2);
echo '<br>';

printf('%s likes to %s', 'Brad', 'code');
echo '<br>';

printf('1+1=%d', 1+1);
echo '<br>';
