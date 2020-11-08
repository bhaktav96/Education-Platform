<?php
$mysqli =new mysqli('localhost','root','tiger','authentication');
if(isset($_POST['register_btn'])){
  
  $username=$mysqli->real_escape_string($_POST['username']);
  $email=$mysqli->real_escape_string($_POST['email']);
  $password=$mysqli->real_escape_string($_POST['password']);
  $password2=$mysqli->real_escape_string($_POST['password2']);
if($password == $password2){
  $password = md5($password);
  $sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
  if($mysqli->query($sql) == true){


  $_SESSION['message']="you are logged in";
  $_SESSION['username']=$username;
  echo "<script>alert('successfully registered');</script>";
  //header("location:home.php");
}

}
else{
  $_SESSION['message']="the two passwords do not match";
  echo "<script>alert('Password is not matching! Please Check Your Password');</script>";

}

}

?>

<?php
header("location:index.php");?>




