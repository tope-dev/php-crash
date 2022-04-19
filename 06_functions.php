<?php
  $y = 12;
  function registerUser($email) {
    echo $email . ' registerd';
  }


  // registerUser('Brad');

  function sum($n1 = 4 , $n2 = 5) {
    return $n1 + $n2;
  }
  
  $number = sum(5, 5);
  // echo $number;

  $subtract = function($n1, $n2) {
    return $n1 - $n2;
  };

  // echo $subtract(10, 5);

  $multiply = fn($n1, $n2) => $n1 * $n2; //Arrow Functions

  echo $multiply(9,9);

