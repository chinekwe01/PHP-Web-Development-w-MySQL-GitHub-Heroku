<?php
$title = 'User Defined Functions';
include 'includes/header.php';
?>
<h1>Functions</h1>
<?php
// Defining function
function writeMessage()
{
     echo 'Nice to meet you <br>';
}

// Calling a function
writeMessage();

// Function with parameters
function addFunction($num1, $num2)
{
     $sum = $num1 + $num2;
     echo "The sum of $num1 and $num2 is: $sum <br>";
}
//Pass by Reference - use ampersand in parameter.
function changeNum(&$num)
{
     $num = $num + 10;
     // $num += 10;
}

function returnProduct($num1, $num2)
{
     $prod = $num1 * $num2;
     return $prod;
}
addFunction(5, 3);
addFunction(5, 78);
addFunction(3, 9);

$num = 500;
changeNum($num);
echo $num . '<br>';

$returnValue = returnProduct(10, 200);
echo $returnValue . '<br>';

?>
<?php
require 'includes/footer.php';
?>