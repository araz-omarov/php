<?php
# 1) For loop – 1-dən 10-a qədər
echo "<h3>For ilə</h3>";
for ($num = 1; $num <= 10; $num++) {
    echo "№: $num <br>";
}
echo "<br>";

# 2) While loop – 1-dən 10-a qədər
echo "<h3>While ilə</h3>";
$num = 1;
while($num <= 10) {
    echo "№: $num <br>";
    $num++;
}
echo "<br>";

# 3) Foreach loop – massivlərlə
echo "<h3>Massiv ilə</h3>";
$fruits = ["apple", "banana", "orange"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit <br>";
}
echo "<br>";

# 4) For loop nümunəsi – cüt ədədlər
echo "<h3>Cüt ədədlər For ilə</h3>";
for ($num = 2; $num <= 20; $num+=2) {
    echo "Cüt: $num <br>";
}
?>
