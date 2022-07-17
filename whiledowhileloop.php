<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Primer | While / Do While Loop</title>
</head>

<body>
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
</body>

</html>