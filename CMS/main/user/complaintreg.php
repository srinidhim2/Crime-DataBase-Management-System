
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
    $comp_type=$_POST['comp_type'];
    $txt=$_POST['txt'];
    $pid=$_POST['p_id'];
    $pname=$_POST['pname'];
    // $criminalid=$_POST['criminal_id'];
    $date=$_POST['date'];
    //$pass = password_hash($password,PASSWORD_DEFAULT);
    // $con_password=$_POST['con_password'];
      $reg = " insert into complaint(complaint_type ,complaint_desc,p_id,pname,date) values ( '$comp_type','$txt','$pid','$pname','$date')";
      mysqli_query($con, $reg);
       $rslt = mysqli_query($con,"SELECT complaint_id FROM complaint where complaint_desc='$txt'");
       while($row = mysqli_fetch_array($rslt))
        $id = $row['complaint_id'];
        $_SESSION['comp_id']=$id;
      echo "<center><table>
      <tr><td>Complaint Id</td><td>$id</td></tr>
      <tr><td>Complaint Type</td><td>$comp_type</td></tr>
      <tr><td>Complaint Description</td><td>$txt</td></tr>
      <tr><td>Police Id</td><td>$pid</td></tr>
      <tr><td>Police Name</td><td>$pname</td></tr>
      <tr><td>Date</td><td>$date</td></tr>
      </table></center>";
     ?>
     <center><a href="victim.php"><button class="btn" type="button" ><b>Victim Details Entry</b></button></a></center>
  </body>

</html>
