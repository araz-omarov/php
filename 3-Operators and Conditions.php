<?php
$age = 14; 

if ($age < 0) {                         # 0 -dan kiçikdirsə -> Yanlış yaş
    echo "Yanlış yaş";
} elseif ($age >= 0 && $age <= 12) {    # 0 -a bərabər və ya böyük, 12 -dən isə kiçik və ya bərabərdisə -> Uşaqsan
    echo "Uşaqsan";
} elseif ($age >= 13 && $age <= 17) {   #  13 -ə bərabər və ya böyük, 17 -dən isə kiçik və ya bərabərdirsə -> Yeniyetmə
    echo "Yeniyetmə";
} else {                                # 17 -dən böyükdürsə -> Böyüksən
    echo "Böyüksən";
}
?>


<?php
/*
$x = 5;
$y = 10;

var_dump($x == $y);   echo "<br>";  # == → bərabərdir mi? 5 bərabərdir 10? → false
var_dump($x != $y);   echo "<br>";  # != → fərqlidir mi? 5 fərqlidir 10? → true
var_dump($x < $y);    echo "<br>";  # < → kiçikdir mi? 5 kiçikdir 10? → true
var_dump($x > $y);    echo "<br>";  # > → böyüktürmü? 5 böyüktür 10? → false
var_dump($x <= $y);   echo "<br>";  # <= → kiçik və ya bərabər? 5 ≤ 10 → true
var_dump($x >= $y);   echo "<br>";  # >= → böyük və ya bərabər? 5 ≥ 10 → false
*/
?>

