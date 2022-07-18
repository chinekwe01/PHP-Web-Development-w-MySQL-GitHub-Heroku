<?php
$title = 'Index';
require_once 'includes/header.php';
?>
<!-- 
     - First Name
     - Last Name
     - Date of Birth (Use DatePicker)
     - Specialty(Database Admin, Software Developer, Web Administrator)
     - Email Address
     - Contact Number
 -->

<h1 class="text-center">Registration for IT Conference</h1>
<form method="get" action="success.php">
     <div class="form-group">
          <label for="firstName">Enter First Name</label>
          <input type="text" class="form-control" id="firstName" name="firstName">
     </div>
     <div class="form-group">
          <label for="lastName">Enter Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName">
     </div>
     <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="text" class="form-control" id="dob" name="dob">
     </div>
     <div class="form-group">
          <label for="specialty">Area of Expertise</label>
          <select id="specialty" name="specialty" class="form-control">
               <option>Database Admin</option>
               <option>Software Developer</option>
               <option>Web Administrator</option>
               <option>Other</option>
          </select>
     </div>
     <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
     </div>
     <div class="form-group">
          <label for="phone">Contact Number</label>
          <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
          <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
     </div>
     <button type="submit" class="btn btn-primary btn-block mb-3">Submit</button>
</form>
<?php
require_once 'includes/footer.php';
?>