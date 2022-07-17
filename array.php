<?php
$title = 'Array';
include 'includes/header.php';
?>
<h1>Arrays</h1>
<?php
// a variable
$num = 3;

// an array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 23, 52, 53, 64, 75, 21, 54];
echo $numbers[5];

$size = count($numbers);
echo "<p>The number size is: $size</p>";

for ($count = 0; $count < $size; $count++) {
     echo "$numbers[$count] ";
}
?>
<?php
require 'includes/footer.php'
?>