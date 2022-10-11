<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$con = mysqli_connect('localhost','root',"");
mysqli_select_db($con, 'crime');
               if(isset($_POST['submit']))
               {
                 // $id = $row['tid'];
                 $id=$_POST['id'];
                 $type=$_POST['type'];
                 $desc=$_POST['desc'];
                 $pid=$_POST['pid'];
                 $cid=$_POST['cid'];
                 $date=$_POST['date'];
                 $query3 = mysqli_query($con,"UPDATE complaint SET complaint_id='$id',complaint_type='$type',complaint_desc='$desc',p_id='$pid',criminal_id='$cid',`date`='$date' WHERE complaint_id=$id");

                   if ($query3)
                       {
                        header('location:viewcomp.php');
                       }
                       // echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'user_list.php';</script>"; }
                   else
                       { echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'user_list.php';</script>"; }
               }

   // $query1=mysql_query("SELECT * FROM u_login WHERE u_id=$id");
   // $query2=mysql_fetch_array($query1);
?>
</body>
</html>
