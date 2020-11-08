
<?php
if(isset($_POST['submit']))
{
$username=$_POST['user'];
$password=$_POST['pass'];
$mysqli =new mysqli('localhost','root','tiger','authentication');

// To protect from MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($mysqli, $username);
$password = mysqli_real_escape_string($mysqli, $password);
$password = md5($password);

//Check username and password from database
$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
$result=mysqli_query($mysqli,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

if(mysqli_num_rows($result) == 1)
{
 $_SESSION['username'] = $username; // Initializing Session
header("location:demo5.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect username or password.";
echo "<script>alert('Password is not matching! Please Check Your Password');</script>";
print_r($error);

}

}

?>


