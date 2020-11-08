<?php
require_once '/Applications/XAMPP/xamppfiles/htdocs/register/init.php';
$mysqli =new mysqli('localhost','root','tiger','upload');
$articlesQuery = $mysqli->query("
	SELECT 
	file.id,
	file.name, 
    COUNT(articles_likes.id) AS likes,
    GROUP_CONCAT(user.username SEPARATOR '|') AS liked_by
    
    FROM articles

LEFT JOIN articles_likes 
ON file.id=articles_likes.article

LEFT JOIN user
ON articles_likes.user = user.id

     GROUP BY file.id
     ");
while($row = $articlesQuery->fetch_object()){
	$row->liked_by = $row->liked_by ? explode('|', $row->liked_by) : [];
	$articles[] = $row;

}
echo '<pre>',print_r($articles,true),'</pre>';
//die();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
</head>
<body>
      <?php foreach($articles as $article): ?>
      	  <div class="article">
      	     <h3><?php echo $article->title; ?></h3>
      	     <a href="like.php?type=article&id=<?php echo $article->id; ?>">Like</a>
             
      	   
      	<p><?php echo $article->likes;?> people like this.</p>
      	<?php if(!empty($article->liked_by)): ?>
      		 <ul>
      		      <?php foreach($article->liked_by as $user): ?>
      		      	<li><?php echo $user; ?>
      		      	</li>
      		      	<?php endforeach; ?>
      		 </ul>
      	<?php endif; ?>




      	</div>
      	<?php endforeach; ?>

</body>
</html>