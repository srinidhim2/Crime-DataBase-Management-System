<?php
session_start();
$con = mysqli_connect('localhost','root',"");
mysqli_select_db($con, 'crime');
// Check connection
$id=$_GET['status'];
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo $id;
$query=("update  complaint SET cleared=1 where complaint_id=$id");
mysqli_query($con,$query);
header('location:viewcomp.php');
// // sql to delete a record
// $sql_v= "SELECT * FROM u_login WHERE u_id=$id";
// $query=mysqli_query($con,$sql_v);
// if(mysqli_num_rows($query))
// {
//   $sql = "DELETE FROM u_login WHERE u_id=$id";
//   mysqli_query($con, $sql);
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . mysqli_error($con);
// }

mysqli_close($con);
?>
