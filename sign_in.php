

<title>Sign in</title>
    <link rel="stylesheet"  href="css/form.css">
<?php include_once("templates/header.php");?>
<?php include_once("templates/nav.php");?>
<body>

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