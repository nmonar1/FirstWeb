<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
<?php include_once("templates/nav.php");?>
<br>
  <div class="container">
    <h1>Create an account </h1>
    <form action="#" method="post">
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="full-name">Full Name:</label>
        <input type="text" id="full-name" name="full-name" required>
      </div>
      <div class = "form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
      </div>
     <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class = "form-group">
        <label for = "password">Password:</label>
        <input type = "password" id="password" name = "password" required>
      </div>
     <div class="form-group">
        <input type="submit" value="Sign up">
      </div>
    </form>
    <br>
    <br>
    <p>Already have an account? <a href="sign_in.html">Log in</a></p>
  </div>
<br>
  <footer class="col-md-12"> Contact us: 07111222333 , Email us : information@etherealessencebeauty.com&nbsp;
    <div class="row">
		<br>
      <div class="col-md-12">Copyright &copy; All rights reserved</div>
    </div>
</footer>
</body>
</html>
