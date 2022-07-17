<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Primer | String Manipulation</title>
</head>

<body>
     <h1>String Manipulation</h1>

     <?php
     // Concatenation of String
     $phrase1 = "Student who came late";
     $phrase2 = "in class, stand with Rock";
     $name = 'chinekwe clever';
     echo $phrase1 . " " . $phrase2;
     echo '<br>';
     echo "<hr>";
     // String transformation
     echo 'Uppercase first letter: ' . ucfirst($name) . '<br>';
     echo 'Uppercase first letter of each word: ' . ucwords($name) . '<br>';
     echo 'Upper case: ' . strtoupper($name) . '<br>';
     echo 'Lower case: ' . strtolower("THIS WAS ALL UPPER CASE") . '<br>';

     echo "<hr>";

     echo 'Repeat String: ' . str_repeat('a', 4) . '<br>';
     echo 'Repeat String: ' . strtoupper(str_repeat('a', 4)) . '<br>';
     echo 'Get a substring: ' . substr($name, 5, 10) . '<br>';
     echo 'Get position of string: ' . strpos($name, 'w') . '<br>';
     echo 'Find character "C": ' . strchr($name, 'c') . '<br>';

     ?>
</body>

</html>