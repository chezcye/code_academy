<?php
$initial = '555';
//We have given you an $initial value to start from as an octal string. 
// (octal is a base 8 system of notation, instead of the likely more familiar decimal base 10 system).
// Save the result in a variable $a. 
$a = octdec($initial);
echo $a;
echo "\n";
// Use a PHP function to convert it to radians and store the result in a new variable, $b.
$b = deg2rad($a);
echo $b;
echo "\n";
//Use a built-in PHP function to take the cosine of $b and store it in a new variable, $c.
$c = cos($b);
echo $c;
echo "\n";
//Use a built-in PHP function to round $c to 3 decimal places and store the result in a new variable, $d.
$d = round($c, 3);
echo $d;
// Find a PHP function to take the natural log of $d and store the result in a new variable, $e.
$e = log($d);
echo "\n";
echo $e;
//Use a PHP function to take the absolute value of $e and store it in $f
$f = abs($e);
echo "\n";
echo $f;
// Use a PHP function to take the inverse or arc cosine of $f and store the result in $g.
$g = acos($f);
echo "\n";
echo $g;
//$g is a number in radians. Use a PHP function to convert this to a number of degrees and store it as $h.
$h = rad2deg($g);
echo "\n";
echo $h;
// Use a PHP function to floor (round down) $h and store the result in $i.
$i = floor($h);
echo "\n";
echo $i;
//Subtract 47 from $i to arrive at the solution, $j.
$j = $i - 47; 
echo "\n";
echo $j;




