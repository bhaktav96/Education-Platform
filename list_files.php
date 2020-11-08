<link href="css2/reset.css" rel="stylesheet" type="text/css">
<link href="css2/style.css" rel="stylesheet" type="text/css">
<?php
// Connect to the database
$dbLink = new mysqli('localhost', 'root', 'tiger', 'upload');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT `id`, `name`, `mime`, `size`, `created` FROM `file`';
$result = $dbLink->query($sql);
 
// Check if it was successfull

 
        // Print each file
        

while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h4><a href='delete.php?id=".$row['id']."'> X</a></h4>";
echo "<h1>" . $row['name'] . "</h1></br>";
echo "<h2>" . $row['created'] . "</h2></br>";
echo "<h2>" . $row['size'] . "</h3></br>";
echo "<h3><a href='get_file.php?id=".$row['id']."'>Download</a></h3>";
echo "<h3><a href='share.html?id=".$row['id']."'>share</a></h3>";
echo "<h3><a href='index4.php?id=".$row['id']."'>comment</a></h3>";
echo "</div>";
}
                                echo "<h3><a href='index2.php?id=".$row['id']."'>BACK</a></h3>";
// Close the mysql connection
$dbLink->close();
?>