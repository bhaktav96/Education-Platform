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
 <h2 align="center">WELCOME TO EDUCA</h2>

     <center>   
        <pre>
       All the Latest
Life is meant to be lived; cherish the exciting moments, 
and relish in those all too brief moments of relaxation. 
I am here to live my own life, and live it passionately. 
EDUCA serves as a vessel to project my passions, 
and clue in my loyal readers as to what inspires me in this crazy world. 
So, sit back, relax, and read on.
      </pre>
      </center>

</div>


 
 
 <div>


<pre align="center">

<h3 align="center">DISCOVER EDUCA</h3>
I am m thrilled you are here because I have so much I want to share with you. 
I am here to make a life out of what I love, I am passionate about EDUCA, and
I truly believe that passion is relayed back to my readers through the innovative
and exciting content that I post. Explore my site, and all that I have to offer; 
perhaps EDUCA will ignite your own passions too.
</pre>
</div> 

 <div>


<pre align="center">

We believethat with technology we can transcend traditional boundaries and tuely 
enable customized self paced learning. Our EDUCA is passionate about changing the 
status and we have intoduced numerous innovations lin the areas of content, 
articles,research papers and events.
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