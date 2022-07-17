<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Primer | Date and Time Manipulation</title>
</head>

<body>
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
</body>

</html>