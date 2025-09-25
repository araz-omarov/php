<?php
function cube($n){
    return $n * $n *$n;
}

echo "5-in kubu: " . cube(5) . "<br>";
?>

<?php
function isEven($n) {
    if ($n % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

var_dump(isEven(4));
var_dump(isEven(7));
?>

<?php
echo "<br>";
function greet($name, $age){
    return "Salam, $name! Sənin $age yaşın var.";
}

echo greet("Araz", 14) . "<br>";
echo greet("Leyla", 20) . "<br>";
?>
