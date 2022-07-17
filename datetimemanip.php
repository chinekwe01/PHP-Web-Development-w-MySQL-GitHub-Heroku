<?php
$title = 'Data and Time Manipulation';
include 'includes/header.php';
?>
<h1>Date and Time Manipulation</h1>

<?php
$dateNow = getdate();
echo "Today's date " . '<br>';
echo $dateNow['mday'] . "</p>";
echo $dateNow['mon'] . "</p>";
echo $dateNow['year'] . "</p>";

echo "Today's Date: " . $dateNow['mday'] . '/' . $dateNow['mon'] . '/' . $dateNow['year'] . '<br>';

echo time() . '<br>';

print date("d/m/y G.i:s<br>", time()) . '<br>';
print "Today is ";
print date("j o F Y, \a\\t g.i a", time());
?>
<?php
require 'includes/footer.php'
?>