<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in<input type="text" name="" id=""></title>
    <link rel="stylesheet"  href="css/form.css">
</head>
<body>
<?php include_once("templates/nav.php");?>
<br> 

    <div class = "container">
        <h1>Log in</h1>
        
            <div class="form-group">
                <label for="username">Username or Email:</label>
                <input type="text" id="username" placeholder="username or email" required>
              </div>
              <div class = "form-group">
                <label for = "password">Password:</label>
                <input type = "password" id="password" name = "password" required>
              </div>
              
              <input type ="submit" value ="Log in">
              <br>
              <br>
              <p>Don't have an account? <a href="sign_up.html">Create account</a></p>
        </div>
          <br>
          <br>
        <footer class="col-md-12"> Contact us: 07111222333 , Email us : information@etherealessencebeauty.com&nbsp;
          <div class="row">
          <br>
            <div class="col-md-12">Copyright &copy; All rights reserved</div>
          </div>
      </footer>
    
</body>
</html>