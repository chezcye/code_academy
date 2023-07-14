<?php
// an empty array $output to store the statements in 
$output = [];
// a for loop that counts from 1 to 100.
for ($i = 1; $i <= 100; $i++){
  // Check if number is divisible by 15 
  if ($i % 15 === 0){
    array_push($output, "FizzBuzz");
  // Check if number divisible by 3
  } elseif ($i % 3 === 0){
    array_push($output, "Fizz");
  // Check if number divisible by 3
  } else if ($i % 5 === 0){
    array_push($output, "Buzz");
  } else {
     array_push($output, $i);
  }

} 
// A foreach loop that iterates through output 
foreach ($output as $value){
  // print the $value at each loop iteration on a new line 
  echo $value . "\n";
}

foreach ($output as $value){
  if ($value === "Fizz"){
    // avoid printing anything when $value is "Fizz"
    continue;
  } else if ($value === "FizzBuzz"){
    echo $value;
    break;
  }
  // print $value and exit the loop.
  echo $value . "\n";
}
