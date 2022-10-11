<?php
session_start();
$con = mysqli_connect('localhost','root',"");
mysqli_select_db($con, 'crime');
$name=$_POST['username'];
$password=$_POST['password'];
$sql_u = "SELECT * FROM u_login WHERE username='$name' && password = '$password'";
$result = mysqli_query($con, $sql_u);

if(mysqli_num_rows($result)){
  while ($row=mysqli_fetch_array($result)) {
    $_SESSION['u_id']=$row['u_id'];
  }
   $_SESSION['username'] = $name;

  echo "<script type='text/javascript'> alert('Login Sucessful');window.location.href='action.php';</script>";
}
else
{
echo "<script type='text/javascript'> alert('Login Unsucessful');window.location.href='user.php';</script>";
}

?>
