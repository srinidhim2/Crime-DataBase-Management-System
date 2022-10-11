<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
session_start();
$con = mysqli_connect('localhost','root',"");
mysqli_select_db($con, 'crime');
if(isset($_SESSION['u_id']))
       {

           $id=$_POST['u_id'];
               if(isset($_POST['submit']))
               {
                 // $id = $row['tid'];
                 $name=$_POST['username'];
                 $phone=$_POST['phone'];
                 $mail=$_POST['mail'];
                 $join=$_POST['join'];
                 $age=$_POST['age'];
                 $address=$_POST['address'];
                 $password=$_POST['password'];
                 $query3 = mysqli_query($con,"UPDATE u_login SET username='$name',password='$password',join_date='$join',age='$age',user_mob='$phone',user_mail='$mail',user_address='$address' WHERE u_id=$id");

                 if ($query3)
                 {
                   echo "<script type='text/javascript'> alert('Update Sucessful');window.location.href='action.php';</script>";
                 }
                 else
                 {
                 echo "<script type='text/javascript'> alert('Login Unsucessful');window.location.href='action.php';</script>";
                 }
               }
             }
               //         {
               //           echo "<center><table>
               //           <tr><td>Id</td><td>$id</td></tr>
               //           <tr><td>Name</td><td>$name</td></tr>
               //           <tr><td>Join Date</td><td>$join</td></tr>
               //           <tr><td>Age</td><td>$age</td></tr>
               //           <tr><td>Mobile Number</td><td>$phone</td></tr>
               //           <tr><td>Address</td><td>$address</td></tr>
               //           <tr><td>Email Id</td><td>$mail</td></tr>
               //           </table></center>";
               //         }
               //         // echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'user_list.php';</script>"; }
               //     else
               //         { echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'user_list.php';</script>"; }
               // }

   // $query1=mysql_query("SELECT * FROM u_login WHERE u_id=$id");
   // $query2=mysql_fetch_array($query1);
?>
</body>
</html>
