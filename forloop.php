<?php
$title = 'For Loop';
include 'includes/header.php';
?>
<h1>For Loop</h1>
<?php
for ($count = 0; $count < 10; $count++) {
     echo '<h2>Hello World</h2>';
}

for ($count = 0; $count < 10; $count++) {
     echo $count . '<br>';
}
?>
<?php
require 'includes/footer.php'
?>