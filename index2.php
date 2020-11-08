<html>
<head>
<link href="css2/reset.css" rel="stylesheet" type="text/css">
<link href="css2/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style.css">
<title>post Box</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

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
   <br><br><br><br><br><br><br>
    <h3>Knowledge At Your Footsteps!</h3>
    </ul>

    

<div id="container">
	
    <div class="comment_input">
        
        	
       <form action="add_file.php" method="post" enctype="multipart/form-data">
    
        <input type="file" name="uploaded_file"><br>
        <input type="submit" value="POST">
    </form>
    </div>
    <div id="post_logs">
    	<p>
        <a href="list_files.php">See all files</a>
    </p>
    <div>
</div>

</body>
</html>