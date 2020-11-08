<?php
require_once '/Applications/XAMPP/xamppfiles/htdocs/examm/db.php';
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  

  
      <link rel="stylesheet" href="css/style.css">
<script>


<script type="text/javascript">

var ck_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var ck_username = /^[A-Za-z0-9_]{1,20}$/;
var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
var ck_password2 =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;

function validate(form){

var email = form.email.value;
var username = form.username.value;
var password = form.password.value;
var password2 = form.password2.value;

var errors = [];
 
  
 if (!ck_email.test(email)) {
  errors[errors.length] = "You must enter a valid email address.";
 }
 if (!ck_username.test(username)) {errors[errors.length] = "You must enter valid UserName,no special char .";
 }
 if (!ck_password.test(password)) {
  errors[errors.length] = "You must enter a valid Password ";
 }
 if (!ck_password.test(password2)) {
  errors[errors.length] = "You must enter a valid Password ";
 }
 
 if (errors.length > 0) {

  reportErrors(errors);
  return false;
 }
  return true;
}
function reportErrors(errors){
 var msg = "Please Enter Valide Data...\n";
 for (var i = 0; i<errors.length; i++) {
 var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
}
 alert(msg);
}
</script>


</script>
  
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
          
          <form action="register.php" method="post" name="form" onsubmit="return validate(this)">
          
          
        
        
            <div class="field-wrap">
              
                    <tr>
                            
                            <td><label>Username:</label></td><br><br>
                            
                            <td><input type="text" id="u1" name="username" class="textInput" placeholder="Your Username" required autocomplete="off"  minlength="6" maxlength="8" /></td>
                            <p id="demo"></p>
                    </tr>
              
            </div>
          

          <div class="field-wrap">
                    <tr>
                    <td><label>Email:</label></td><br><br>
                    <td><input type="email" name="email" class="textInput" placeholder="Your Email" /></td>
                   </tr>
                   <p id="demo"></p>
          </div>
          
          <div class="field-wrap">
          <tr>
          <td><label>Password:</label></td><br><br>
          <td><input type="password" name="password" class="textInput" placeholder="Your Password" minlength="6" /></td>
     </tr>
     </div>
     <div class="field-wrap">
     <tr>

          <td><label>Password Again:</label></td><br><br>
          <td><input type="password" name="password2" class="textInput"  placeholder="Retype-Password" minlength="6" /></td>
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
