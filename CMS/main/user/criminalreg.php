
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
    </style>
  </head>
  <body>
    <?php
    session_start();
    $con = mysqli_connect('localhost','root',"");
    mysqli_select_db($con, 'crime');
    $name=$_POST['username'];
    $crime_type=$_POST['crime_type'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    //$pass = password_hash($password,PASSWORD_DEFAULT);
    // $con_password=$_POST['con_password'];
    $sql_u = "SELECT * FROM criminal WHERE criminal_name='$name' and crime_type='$crime_type'";
    $result = mysqli_query($con, $sql_u);

    if(mysqli_num_rows($result)){
      echo "Criminal already exists";
    }
    else {
      $reg = "insert into criminal(crime_type,criminal_name,age,criminal_add,criminal_pno) values ('$crime_type','$name','$age','$address','$phone')";
      mysqli_query($con, $reg);
       $rslt = mysqli_query($con,"SELECT criminal_id FROM criminal where criminal_name='$name'");
       while($row = mysqli_fetch_array($rslt))
          $id = $row['criminal_id'];
      echo "<center><table>
      <tr><td>Id</td><td>$id</td></tr>
      <tr><td>Name</td><td>$name</td></tr>
      <tr><td>Crime Type</td><td>$crime_type</td></tr>
      <tr><td>Address</td><td>$address</td></tr>
      <tr><td>Age</td><td>$age</td></tr>
      <tr><td>Mobile Number</td><td>$phone</td></tr>
      </table></center>";
    }

     ?>
     <center><a href="userheader.php"><button class="btn" type="button" ><b>Go Back</b></button></a></center>
  </body>

</html>
