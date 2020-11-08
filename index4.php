<html>
<head>
<link href="css1/reset.css" rel="stylesheet" type="text/css">
<link href="css1/style.css" rel="stylesheet" type="text/css">
<title>Comment Box</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>

	function commentSubmit(){
		if(form1.comments.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		
		var comments = form1.comments.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('GET', 'insert2.php?&comments='+comments, true); //open and send http request
		xmlhttp.send();
	}
	
		$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('logs2.php');}, 2000);
		});
		
</script>
</head>
<body>
<div id="container">
	
    <div class="comment_input">
        <form name="form1">
        	
            <textarea name="comments" placeholder="Leave Comments Here..." style="width:635px; height:100px;"></textarea></br></br>
            <a href="#" onClick="commentSubmit()" class="button">Post</a></br></br></br>
            <a href="index2.php"  class="button">BACK</a></br>
        </form>
    </div>
    <div id="comment_logs">
    	Loading comments...
    	
    <div>
</div>
</body>
</html>