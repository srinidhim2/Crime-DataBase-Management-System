<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Action</title>
    <style media="screen">
      div.a {
        margin-top: 15%;
      }
      table {
        /* border-collapse: collapse; */
        border-spacing: 30px;
        align-self: center;
        margin-top: 5%;
        width: 30%;
        margin-left: auto;
        margin-right: auto;
        font-size: 30px;

      }

      th, td {
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even){background-color: #f2f2f2}

      th {
        background-color: blue;
        color: white;
      }
    .z{
      /* border-collapse: collapse; */

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
    body{
        background-image: url('../peakpx.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;
      background-size: 1530px 860px;
        font: 36px Arial, sans-serif;
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
  </head>
  <body>
    <?php
    session_start();
    include '../adminheader.html';
    if(!isset($_SESSION['username']))
    {
      header('location:admin.php');
    }
    $con=mysqli_connect("localhost","root","","crime");
    $res = mysqli_query($con,"select * from u_login");
    $num = mysqli_num_rows($res);
    $res1 = mysqli_query($con,"select * from complaint WHERE cleared=0");
    $num1 = mysqli_num_rows($res1);
    $res2 = mysqli_query($con,"select * from complaint WHERE cleared=01");
    $num2 = mysqli_num_rows($res2);
    echo "
    <centre>
    <table  class='a'>
    <tr>
    <th>No of Police</th>
    <th>No of Complaints Pending</th>
    <th>No of Complaints Solved</th>
    <tr>
    <td><center>".$num."</center></td>
        <td><center>".$num1."</center></td>
        <td><center>".$num2."</center></td>
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>
    </table>
    </centre>";
     ?>
    <div class="a">
      <center><h1>
    <!-- <a href="registeration.php"<h1><button class=" button button1"type="button" name="button">Add Police</button></h1></a>
    <a href="result.php"<h1><button class=" button button1"type="button" name="button">View Police</button></h1></a><br><br>
    <a href="viewcomp.php"<h1><button class=" button button1"type="button" name="button">View Complaints</button></h1></a><br><br>
    <a href="viewall.php"<h1><button class=" button button1"type="button" name="button">View Complited Complaint</button></h1></a><br><br>
    <a href="logout.php"<h1><button class=" button button1"type="button" name="button">LOGOUT</button></h1></a><br><br> -->
      <center><a href="../login.php"><button class="btn" type="button" ><b>Go Back</b></button></a></center>
    </div>
  </body>
</html>
