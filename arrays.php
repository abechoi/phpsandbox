<?php
  # Array - Variable that holds multiple values
  /*
      - Indexed
      - Associative
      - Multi-dimensional
  */

  // Indexed
  $people = array('Kevin', 'Jeremy', 'Sara');
  $ids = array(23, 55, 12);
  $cars = ['Honda', 'Toyota', 'Ford'];
  $cars[3] = 'Chevy';
  $cars[] = 'BMW'; // Appends to the array without needing the number

  //echo count($cars);
  //print_r($cars); // prints the whole array
  //var_dump($cars); // prints the whole array with more information

  //echo $people[1];
  //echo $ids[2];
  //echo $cars[4];

  // Associative
  $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
  $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
  //echo $people['Brad']; // prints value by the key which is the name
  //echo $ids[22];
  $people['Jill'] = 42;
  //echo $people['Jill'];
  //print_r($people);
  //var_dump($people);

  // Multi-dimensional
  $cars = array(
      array('Honda', 20, 10),
      array('Toyota', 30, 20),
      array('Ford', 23, 12),
  );

  echo $cars[1][2];
?>