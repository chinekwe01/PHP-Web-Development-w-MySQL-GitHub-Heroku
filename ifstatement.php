<?php
$title = 'If Statement';
include 'includes/header.php';
?>
<?php
echo "<h2>If Statement </h2>";

$grade = 30;
if ($grade >= 50) {
     echo "<h3 class='passed'>YOU HAVE PASSED </h3>";
} else {
     echo "<h3 class='failed'>YOU HAVE FAILED </h3>";
}


$grade = 'A';
if ($grade == 'A') {
     echo '<h2 class="star">YOU ARE A SUPERSTAR!</h2>';
} elseif ($grade == 'B') {
     echo '<h2 class="passed">YOU HAVE PASSED!</h2>';
} else {
     echo '<h2 class="failed">YOU HAVE FAILED...</h2>';
}
?>
<?php
require 'includes/footer.php';
?>