<?php
$title = 'Index';
require_once 'includes/header.php';
?>

<h1 class="text-success text-center">You have been registered</h1>

<!-- Outputs the result of input using get method. -->
<!-- <div class="card" style="width: 18rem;">
     <div class="card-body">
          <h5 class="card-title"><?php echo $_GET['firstName'] . ' ' . $_GET['lastName'] ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $_GET['specialty'] ?></h6>
          <p class="card-text">Date of Birth: <?php echo $_GET['dob'] ?></p>
          <p class="card-text">Email Address: <?php echo $_GET['email'] ?></p>
          <p class="card-text">Contact Number: <?php echo $_GET['phone'] ?></p>
     </div>
</div> -->


<div class="card" style="width: 18rem;">
     <div class="card-body">
          <h5 class="card-title"><?php echo $_POST['firstName'] . ' ' . $_POST['lastName'] ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['specialty'] ?></h6>
          <p class="card-text">Date of Birth: <?php echo $_POST['dob'] ?></p>
          <p class="card-text">Email Address: <?php echo $_POST['email'] ?></p>
          <p class="card-text">Contact Number: <?php echo $_POST['phone'] ?></p>
     </div>
</div>

<?php
/*
echo 'First Name is: ' . $_GET['firstName'] . '<br>';
echo 'Last Name is: ' . $_GET['lastName'] . '<br>';
echo 'Date of Birth is: ' . $_GET['dob'] . '<br>';
echo 'Area of Expertise is: ' . $_GET['specialty'] . '<br>';
echo 'Email is: ' . $_GET['email'] . '<br>';
echo 'Contact Number is: ' . $_GET['phone'] . '<br>';
*/
?>
<?php
require_once 'includes/footer.php';
?>