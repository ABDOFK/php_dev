<?php
$a = 4;
$b = 6;
$c = 8;
echo "avant permutation <br>" . "a : " . $a . "<br> b  :" . $b . "<br>  c  :" .     $c . "<br>";
$x = $a;
$a = $b;
$b = $c;
$c = $x;

echo " <br> apres permutation <br>" . "a : " . $a . "<br> b  :" . $b . "<br>  c  :" .     $c;

