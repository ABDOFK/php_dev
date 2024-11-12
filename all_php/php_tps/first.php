<?php


// ex1
echo "ex1 <br>";
$a = 'abcd4';
$b = 9;

echo "a+b  :  " . (int)$a + $b . "<br>";

//ex2
echo "ex2 <br>";
$a = 10;
$b = 5;

$addition = $a + $b;
$multiplication = $a * $b;
$division = $a / $b;

echo "Addition : " . $addition . "<br>";
echo "Multiplication : " . $multiplication . "<br>";
echo "Division : " . $division . "<br>";

//ex3
echo "ex3 <br>";
$i = 0;

while ($i <= 20) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
    $i++;
}

?>
