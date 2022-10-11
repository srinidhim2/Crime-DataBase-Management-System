<?php
session_start();
$con = mysqli_connect('localhost','root',"");
mysqli_select_db($con, 'crime');
// Check connection
$id=$_GET['status'];
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql_v= "SELECT * FROM u_login WHERE u_id=$id";
$query=mysqli_query($con,$sql_v);
if(mysqli_num_rows($query))
{
  $sql = "DELETE FROM u_login WHERE u_id=$id";
  mysqli_query($con, $sql);
echo "<script type='text/javascript'>alert('Record deleted Sucessful');window.location.href='result.php';</script>";
} else {
  echo "Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);
?>
