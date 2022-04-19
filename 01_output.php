<?php
// echo - Output strings, numbers, html, etc
// echo 123, 'Hello!', 10.5;

// print - Works like echo, but can only take in a single argument
// print 123;


// usually used for debugging (print_r(), var_dump(), var_export())

// print_r() - Print single values and arrays
// print_r([1,2,3]);

// var_dump() - Returns more info like data type and length
// var_dump('Hello');

// var_export() - Similiar to var_dump(). Outputs a string representation of a variable
// var_export('Hello');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Output_php</title>
</head>

<body>
  <h1><?= 'Post One'; ?></h1>
</body>

</html>