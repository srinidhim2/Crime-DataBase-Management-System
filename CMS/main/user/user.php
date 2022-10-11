<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>student Login</title>
    <style media="screen">
      .container{
        margin-top:15%;
        margin-left:35%;
      }
      div.a {
        margin-top: 15%;
      }
      .containar1{
            width: 100%;
            height: 10%;
            margin:  auto; /* Center the DIV horizontally */
        }
        .fixed-header, .fixed-footer{
            width: 100%;
            height:5%;
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
      body {
        background-image: url('../img.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;
      background-size: 1530px 860px;
       font: 25px Arial, sans-serif;


}
.container1 p{
    line-height: 200px; /* Create scrollbar to test positioning */
}
nav a{
    color: #fff;
    text-decoration: none;
    padding: 2px 5px;
    display: inline-block;
    font-size: 12;
    font-family:"Times New Roman", Times, serif;
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

.container {
  /* color: black;
  width: 400px;
  height: 260px;
  display: flex;
  justify-content: center;
  align-items: center; */
  background-color:#fff;
  background: rgba(135,206,235, 0.56);
  color:black;
  border: 4px solid black;
  width:400px;
  transform :translate(2000px,-600px);
  height: 400px;
  padding: 20px;

}
input[type="text"] {
border: 2px solid red;
font-size: 18px;
border-radius: 4px;
background-color: #2471A3;
 color: white;
}
input[type="password"] {
border: 2px solid red;
font-size: 18px;
border-radius: 4px;
background-color: #2471A3;
 color: white;
}

.button {
  background-color: #2471A3; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


    </style>
  </head>
  <body >
    </script>
    <div class="container" style="text-align: left;border: 4px solid black;transform: translateY(-40px);">


     <form name="form1" action="login.php" method="post" onsubmit="required()">
      <center><input type="image" src="userpic.png" height=200px ></center>
      <label for="Username">Username</label><input align="middle" type="text" name="username" value="admin" required><br>
      <label for="password">Password   </label><input align="middle" type="password" name="password" required><br>
      <center><button class="button button1" onclick="pop()">LOGIN</button></center>
        <center><a href="../login.php"><button class="btn" type="button" ><b>Go Back</b></button></a></center>
    </form>
    </div>
  </body>
  <div class="fixed-header">
      <div class="containar1">
          <nav>
              <a href="#">Home</a>
              <a href="#">About</a>
              <a href="../login.php">Login</a>
          </nav>
      </div>
  </div>
</html>
