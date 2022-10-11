<?php
// Include the database configuration file
session_start();
$con = mysqli_connect('localhost','root',"");
mysqli_select_db($con, 'crime');

$id=$_SESSION['u_id'];
$statusMsg = '';

// File upload path
$targetDir = "../uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
$reg="update u_login set file_name='$fileName' where u_id='$id'";
mysqli_query($con,$reg);
header("location:action.php");
?>
