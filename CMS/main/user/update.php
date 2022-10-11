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
    height: 500px;
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
<script type="text/javascript">
function onChange() {
const password = document.querySelector('input[name=password]');
const confirm = document.querySelector('input[name=confirm]');
if (confirm.value === password.value) {
  confirm.setCustomValidity('');
} else {
  confirm.setCustomValidity('Passwords do not match');
}
}
</script>
<body>
  <?php
  session_start();
  $con = mysqli_connect('localhost','root',"");
  mysqli_select_db($con, 'crime');
  $id=$_SESSION['u_id'];
  $rslt = mysqli_query($con,"SELECT * FROM u_login where u_id='$id'");
  while($row = mysqli_fetch_array($rslt))
  {
     $id = $row['u_id'];
     $name=$row['username'];
     $phone=$row['user_mob'];
     $mail=$row['user_mail'];
     $join=$row['join_date'];
     $age=$row['age'];
     $address=$row['user_address'];
     $password=$row['password'];
   }

   ?>
    <h1 style="text-align: center;background-color: black;color: white;padding: 30px;transform: translate(-35px,-23px);width: 98%;font-size: 40px;">Update Your Details</h1>
    <div class="main">
        <center>
        <div class="internal" style="text-align: left;border: 4px solid black;transform: translateY(-40px);">
            <form action="up_data.php" method="post">
                Id : <input type="text" name="u_id" value="<?=$id?>"><br><br><br>
                Name : <input type="text" name="username" value="<?=$name?>"><br><br><br>
                Phone No : <input type="text" name="phone" value="<?=$phone?>"><br><br><br>
                Email ID: <input type="text" name="mail" value="<?=$mail?>"><br><br><br>
                Join date: <input type="text" name="join" value="<?=$join?>"><br><br><br>
                Age: <input type="text" name="age" value="<?=$age?>"><br><br><br>
                Address: <input type="text" name="address" value="<?=$address?>"><br><br><br>
                Password: <input type="password" name="password" value="<?=$password?>" onChange="onChange()" /><br><br><br>
                Confirm Password: <input type="password" name="confirm" onChange="onChange()" /><br><br><br>
                <center><input class="button1" style="height: 40px;width: 110px;font-size: 20px;" type="submit" name="submit" value="SUBMIT"></center> <BR>
            </form>
        </div>
    </center>
    </div>
</body>
</html>
