
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
    $name=$_POST['name'];
    $pno=$_POST['pno'];
    $address=$_POST['address'];
    // $criminalid=$_POST['criminal_id'];
    $vcid=$_POST['vcid'];
    //$pass = password_hash($password,PASSWORD_DEFAULT);
    // $con_password=$_POST['con_password'];
      $reg = " insert into victim(victim_name,victim_pno,victim_add,vcomplaint_id) values
      ( '$name','$pno','$address','$vcid')";
      mysqli_query($con, $reg);
       $rslt = mysqli_query($con,"SELECT victim_id FROM victim where victim_name='$name'");
       while($row = mysqli_fetch_array($rslt))
        $id = $row['victim_id'];
      echo "<center><table>
      <tr><td>Victim Id</td><td>$id</td></tr>
      <tr><td>Name</td><td>$name</td></tr>
      <tr><td>Phone No.</td><td>$pno</td></tr>
      <tr><td>Address</td><td>$address</td></tr>
      <tr><td>Complaint Id</td><td>$vcid</td></tr>
      </table></center>";
     ?>
     <!-- <center><a href="victim.php"><button class="btn" type="button" ><b>Victim Details Entry</b></button></a></center> -->
     <center><a href="action.php"><button class="btn" type="button" ><b>Go Back</b></button></a></center>

  </body>

</html>
