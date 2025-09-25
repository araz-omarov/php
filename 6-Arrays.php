<?php
 
# 1) İndeksli massiv (Indexed array)
$fruits = ["apple", "banana", "orange"];

echo $fruits[0];    # apple
echo "<br>";
echo $fruits[1];    # banana
echo "<br>";
echo $fruits[2];    # orange
echo "<br>";
?>


<?php

echo "<br>";
?>


<?php
 
# 2) Assosiativ massiv (Associative array)
$person = [
    "name" => "Araz",
    "age" => 14,
    "city" => "Baku"
];

echo $person["name"];   # Araz
echo "<br>";
echo $person["age"];    # 14
echo "<br>";
echo $person["city"];   # Baku
echo "<br>";
?>


<?php

# 3) Çoxölçülü massiv (Multidimensional array)
$students = [
    ["Araz", 14],
    ["Leyla", 20],
    ["Murad", 18]
];

echo $students[0][0]; # Araz
echo "<br>";
echo $students[1][1]; #20
?>