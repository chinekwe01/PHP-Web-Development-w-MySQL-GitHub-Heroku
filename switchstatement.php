<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Primer | Switch Statement</title>
     <style>
     .star {
          color: #0f0;
     }

     .passed {
          color: #00f;
     }

     .failed {
          color: #f00;
     }
     </style>
</head>

<body>
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
</body>

</html>