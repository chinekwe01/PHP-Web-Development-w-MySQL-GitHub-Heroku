<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Primer | If Statement</title>
     <style>
     .passed,
     .star {
          color: #0f0;
     }

     .failed {
          color: #f00;
     }
     </style>
</head>

<body>

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
</body>

</html>