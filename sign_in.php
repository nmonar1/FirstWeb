<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
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
              <p>Don't have an account? <a href="sign_up.php">Create account</a></p>
        </div>
          <br>
          <br>
          <?php include_once("templates/footer.php");?>
    
</body>
</html>