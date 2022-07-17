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
<form>
     <div class="form-group">
          <label for="firstName">Enter First Name</label>
          <input type="text" class="form-control" id="firstName">
     </div>
     <div class="form-group">
          <label for="lastName">Enter Last Name</label>
          <input type="text" class="form-control" id="lastName">
     </div>
     <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="text" class="form-control" id="dob">
     </div>
     <div class="form-group">
          <label for="specialty">Area of Expertise</label>
          <select id="specialty" class="form-control">
               <option value="">Database Admin</option>
               <option value="">Software Developer</option>
               <option value="">Web Administrator</option>
               <option value="">Other</option>
          </select>
     </div>
     <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
     </div>
     <div class="form-group">
          <label for="phone">Email address</label>
          <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp">
          <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
     </div>
     <button type="submit" class="btn btn-primary btn-block mb-3">Submit</button>
</form>
<?php
require_once 'includes/footer.php';
?>