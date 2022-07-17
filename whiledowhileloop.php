<?php
$title = 'While and Do While Loop';
include 'includes/header.php';
?>
<h1>While Loop</h1>
<?php
// Pre-condition loop
$grade = 0;
while ($grade <= 10) {
     echo '<h2> I AM LESS THAN 10! </h2>';
     $grade++;
}
echo '<p>Exit Loop</p>';
?>

<h1>Do While Loop</h1>
<?php
// Post-condition loop
$grade = 0;
do {
     echo '<p>I AM DO WHILE LOOP</p>';
     $grade++;
} while ($grade <= 10);

echo '<p>Exit Loop</p>';
?>
<?php
require 'includes/footer.php';
?>