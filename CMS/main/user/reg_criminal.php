<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Action</title>
    <style media="screen">
      div.a {
        margin-top: 15%;
      }
      .containar{
            width: 90%;
            margin: 0 auto; /* Center the DIV horizontally */
        }
        .fixed-header, .fixed-footer{
            width: 100%;
            position: fixed;
            background: #444;
            padding: 10px 0;
            color: #fff;
        }
        .fixed-header{
            top: 0;
        }
        .fixed-footer{
            bottom: 0;
        }
        /* Some more styles to beutify this example */
        nav a{
            color: #fff;
            text-decoration: none;
            padding: 7px 25px;
            display: inline-block;
        }
        .container p{
            line-height: 200px; /* Create scrollbar to test positioning */
        }


      body{
        background: rgb(238,174,202);
      background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
      }
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
    .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 100px;
    }
    .button1{
      display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 50px;
  box-shadow: 0 9px #999;
  width:500px;

    }
    .button1:hover {
background-color: #3e8e41
}
.button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

    </style>
    <!-- <script type="text/javascript">
      function delete()
      {
        var a=prompt("Enter the User Id to Update");
      }
    </script> -->
  </head>
  <body>
  <?php
  session_start();
  $con = mysqli_connect('localhost','root',"");
  mysqli_select_db($con, 'crime');
  $rslt = mysqli_query($con,"SELECT username FROM u_login where username='$name'");
  while($row = mysqli_fetch_array($rslt))
     $id = $row['u_id'];

   ?>
    <div class="fixed-header">
        <div class="containar">
            <nav>
                <a href="#"><h1>Home</h1></a>
                <a href="#"><h1>About</h1></a>
                <a href="login.php"><h1>Login</h1></a>
            </nav>
        </div>
    </div>
    <?php
    session_start();
    if(!isset($_SESSION['username']))
    {
      header('location:user.php');
    }

     ?>
    <div class="a">
      <center><h1>
    <a href="complaint.php"<h1><button class=" button button1"type="button" name="button">Register Complaint</button></h1></a>
    <a href="criminal_detl.php"<h1><button class=" button button1"type="button" name="button">Criminal details</button></h1></a><br><br>
      <center><a href="action.php"><button class="btn" type="button" ><b>Go Back</b></button></a></center>
    </div>

  </body>
</html>
