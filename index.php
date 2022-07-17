<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Primer | Index</title>
</head>

<body>
     <h2>Follow each link to the page example</h2>
     <ul>
          <li><a href="array.php">Simple Array and Printouts</a></li>
          <li><a href="forloop.php">Simple For Loop</a></li>
          <li><a href="whiledowhileloop.php">Simple While / Do While Loop</a></li>
          <li><a href="ifstatement.php">Simple If Statement</a></li>
          <li><a href="switchstatement.php">Simple Switch Statement</a></li>
          <li><a href="stringmanip.php">Simple String Manipulation</a></li>
          <li><a href="datetimemanip.php">Simple Date and Time Manipulation</a></li>
          <li><a href="functions.php">Simple Functions</a></li>
     </ul>
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
</body>

</html>