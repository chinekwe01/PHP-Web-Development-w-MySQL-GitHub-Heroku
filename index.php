<?php
$title = 'Index';
include 'includes/header.php';
?>
<!-- Basic HTML -->
<h1>Hello HTML - PHP Primer</h1>

<?php
// Printing to HTML using echo
echo 'Hello PHP';
// HTML Tags could be echoed
echo '<br>';
echo 'Next line';
echo '<br>'
?>

<?php
// Variables need a '$'. They are not strongly typed
$name = 'Chinekwe Clever';
$age = 24;
// echo variables
echo "<h1> My Name is: $name </h1>";
echo "<h1> My Age is: $age years</h1>";
?>

<?php
require 'includes/footer.php'
?>