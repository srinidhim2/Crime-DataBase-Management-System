<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Details</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body{
    background-image: url("image.png");
    background-repeat: no-repeat;
    background-size: cover;
}
.internal
{
    background-color: beige;
    color:black;
    border: 4px solid black;
    width:500px;
    transform :translate(2000px,-600px);
    height: 455px;
    padding: 20px;
}
.button1 {
    background-color: rgb(142, 133, 143);
    color: #e7e7e7; color: black;
    border: 2px solid #000000;
    border-radius: 12px;
  }

  .button1:hover {
    background-color: #0f130f;
    color: white;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  }
    </style>
</head>
<body>
  <?php
  session_start();
  $con = mysqli_connect('localhost','root',"");
  mysqli_select_db($con, 'crime');
  $id=$_GET['status'];
  $rslt = mysqli_query($con,"SELECT * FROM complaint where complaint_id='$id'");
  while($row = mysqli_fetch_array($rslt))
  {
     $id = $row['complaint_id'];
     $type=$row['complaint_type'];
     $desc=$row['complaint_desc'];
     $pid=$row['p_id'];
     $criminal_id=$row['criminal_id'];
     $date=$row['date'];
   }
   ?>
    <h1 style="text-align: center;background-color: black;color: white;padding: 30px;transform: translate(-35px,-23px);width: 98%;font-size: 40px;">Update Your Details</h1>
    <div class="main">
        <center>
        <div class="internal" style="text-align: left;border: 4px solid black;transform: translateY(-40px);">
            <form action="up_complaint.php" method="post">
                Complaint id: <input type="text" name="id" value="<?=$id?>"><br><br><br>
                Complaint type : <input type="text" name="type" value="<?=$type?>"><br><br><br>
                Complaint description : <input type="text" name="desc" value="<?=$desc?>"><br><br><br>
                Police Id: <input type="text" name="pid" value="<?=$pid?>"><br><br><br>
                Criminal_id <input type="text" name="cid" value="<?=$criminal_id?>"><br><br><br>
                Date <input type="text" name="date" value="<?=$date?>"><br><br><br>
               <center><input class="button1" style="height: 40px;width: 110px;font-size: 20px;" type="submit" name="submit" value="SUBMIT"></center> <BR>
            </form>
        </div>
    </center>
    </div>
</body>
</html>
