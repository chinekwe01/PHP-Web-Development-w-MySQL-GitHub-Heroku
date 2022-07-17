<?php
$title = 'Switch Statement';
include 'includes/header.php';
?>
<h1>Switch Statement</h1>

<?php
$grade = 'c';

switch ($grade) {
     case 'A':
          echo "<h2 class='star'>YOU ARE A SUPERSTAR</h2>";
          break;

     case 'B':
          echo "<h2 class='passed'>YOU HAVE PASSED</h2>";
          break;
     default:
          echo "<h2 class='failed'>YOU HAVE FAILED...</h2>";
          break;
}
?>
<?php
require 'includes/footer.php';
?>