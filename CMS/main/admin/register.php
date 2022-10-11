
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

    .btn:hover{
      background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(158,176,27,1) 35%, rgba(0,212,255,1) 100%);
    border: none;
    color: Black;
    padding: 18px 36px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    opacity: 0.6;
    transition: 0.3s;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
    }
    body{
      background-image: url('../image3.jpg');
       background-repeat: no-repeat;
       background-attachment: fixed;
    background-size: 1530px 860px;
      font: 18px Arial, sans-serif;
    }
    </style>
  </head>
  <body>
    <?php
    session_start();
    $con = mysqli_connect('localhost','root',"");
    mysqli_select_db($con, 'crime');
    $name=$_POST['username'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $join=$_POST['join'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    //$pass = password_hash($password,PASSWORD_DEFAULT);
    // $con_password=$_POST['con_password'];
    $sql_u = "SELECT * FROM u_login WHERE username='$name'";
    $result = mysqli_query($con, $sql_u);

    if(mysqli_num_rows($result)){
      echo "User already exists";
    }
    else {
      $reg = " insert into u_login(username, password ,join_date,age,user_mob,user_mail,user_address) values ('$name', '$password','$join','$age','$phone','$mail','$address')";
      mysqli_query($con, $reg);
       $rslt = mysqli_query($con,"SELECT u_id FROM u_login where username='$name'");
       while($row = mysqli_fetch_array($rslt))
          $id = $row['u_id'];
      echo "<center><table>
      <tr><td>Id</td><td>$id</td></tr>
      <tr><td>Name</td><td>$name</td></tr>
      <tr><td>Join Date</td><td>$join</td></tr>
      <tr><td>Age</td><td>$age</td></tr>
      <tr><td>Mobile Number</td><td>$phone</td></tr>
      <tr><td>Address</td><td>$address</td></tr>
      <tr><td>Email Id</td><td>$mail</td></tr>
      </table></center>";
    }

     ?>
     <center><a href="registeration.php"><button class="btn" type="button" ><b>Go Back</b></button></a></center>
  </body>

</html>
