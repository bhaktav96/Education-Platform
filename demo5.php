<?php
session_start();
?>




<!DOCTYPE html>
<html>
<head>
	<title>Register,login and logout user php mysql</title>

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  	


  <ul class="ul">
   <li><div class="div1">
        <img src="6.jpg" width="100px" height="70px" class="img">
   </div></li>
    <li class="li"><a href="logout.php" class="a">Logout</a></li>
    <li class="li"><a href="index2.php" class="a">Articles</a></li>
    <li class="li"><a href="about.php" class="a">About</a></li>
    <li class="li"><a href="demo5.php" class="a">Home</a></li> 
   <br><br><br>
    <h3>Knowledge At Your Footsteps!</h3>
    </ul>
   

 




<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
  
  
  
  
  <hr>
 
 <fieldset id="image" > 
   
<div>
 <h1 align="center" id="hello">WELCOME TO EDUCA</h1>

        <center>
        <pre>
       Learning is often considered to be a normal part of working and personal life. Both learning 
       for achieving a job as well as for achieving knowledge should not be neglected. Online 
       environment is changing continuously and it represents a great opportunity for learning.
        It is very important to discover how to learn using all available communication channels 
       and choosing the ones that best suit a person’s style of filtering the information.
      </pre>
      </center>


<pre align="right">


Online learning proves to be a great alternative. Students have
the chance to study in their own time and especially for free. It 
represents a great way to study many fields and to boost the level
of self-motivation. Online learning is so effective because
 students can finish their homework quickly. 
</pre>

 


<pre align="left">


An independent approach to distance learning teaches the student to be 
a more effective time  manager. With online learning, a student may 
develop the technological skills needed in their future careers. 
</pre>



<pre align="center">


Online learning also provides many additional benefits beyond just 
convenience and financial savings. Knowledge of the functions of the
Internet, typing and software programs are necessary to be considered 
digitally literate, and online learning helps strengthen these skills. 
</pre>
</div> 
</fieldset> 
<hr>
   
   
 
   
    
<footer>
  <ul class="ul1">
  <li class="li1"><a href="about.php">About Us </a></li>
  <li class="li1"><p>Contact:</p>
                                      <p>Educa@gmail.com</p>
                                      1234567890</li><li class="li1"> <a href="logout.php">Log Out</a></li>
                                      
</footer>


</body>
</html>