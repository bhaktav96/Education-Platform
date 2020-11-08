<?php

require_once '/Applications/XAMPP/xamppfiles/htdocs/examm/db.php';




?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="register.php" method="post">
          
          
        
        
            <div class="field-wrap">
              
                    <tr>
                            
                            <td><label>Username:</label></td><br><br>
                            
                            <td><input type="text" name="username" class="textInput" placeholder="Username should be less than 6[alphabet only]" required autocomplete="off" pattern="[a-z]{2,6}" autofocus="username" required="username" /></td>
                    </tr>
              
            </div>
          

          <div class="field-wrap">
                    <tr>
                    <td><label>Email:</label></td><br><br>
                    <td><input type="email" name="email" class="textInput" placeholder="abcde123@gmail.com" pattern="([a-zA-Z0-9_]{8,20})*@([a-zA-Z]{5,10})\.([a-zA-Z]{2,5})" required="email" /></td>
                   </tr>
          </div>
          
          <div class="field-wrap">
          <tr>
          <td><label>Password:</label></td><br><br>
          <td><input type="password" name="password" class="textInput" placeholder="password minimum length 5[alphabet only]" pattern="[A-Z a-z]{5,12}" required="password" /></td>
     </tr>
     </div>
     <div class="field-wrap">
     <tr>

          <td><label>Password Again:</label></td><br><br>
          <td><input type="password" name="password2" class="textInput"  placeholder="Retype-Password" pattern="[A-Z a-z]{5,12}" required="password2"/></td>
     </tr>
            
          </div>
                     <tr>
                    <td></td>
                   <td><input type="submit" name="register_btn" value="Register" class="button button-block" ></td>
                  </tr>
         
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Username:<span class="req">*</span>
            </label>
              <input type="text" name="user"><br/>
            
            </div>
          
          <div class="field-wrap">
            <label>
              Password: <span class="req">*</span>
            </label>
            <input type="password" name="pass"><br/>

          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          
          <input type="submit" name="submit" value="Log In" class="button button-block"/>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  


 <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    </body>
</html>
