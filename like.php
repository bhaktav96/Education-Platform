<?php

require_once '/Applications/XAMPP/xamppfiles/htdocs/register/init.php';

if(isset($_GET['type'],$_GET['id'])){
	$type = $_GET['type'];
	$id = (int) $_GET['id'];
	switch($type)
     {
     	case 'article': 
     	
     	     $mysqli->query("INSERT INTO articles_likes (user,article)
                   SELECT {$_SESSION['user_id']},{$id}
                   FROM file
                   WHERE EXISTS(
                    SELECT id
                    FROM file
                    WHERE id={$id})
                    AND NOT EXISTS (
                      SELECT id
                      FROM articles_likes
                      WHERE user={$_SESSION['user_id']}
                      AND file ={$id})
                      LIMIT 1
                      ");

                      break;
                    



     }
 }
header('Location:index3.php');
?>





