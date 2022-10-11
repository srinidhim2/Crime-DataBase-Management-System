<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: pink;
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
    padding: 50px;
  background-color: lightblue;
}

input[type=text],input[type=email], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: orange;
  outline: none;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
</style>
<?php
session_start();
    include '../adminheader.html'; ?>
</head>
<body>
<form  action="register.php" method="post">

  <div class="container">
  <center>  <h1> Police Registeration Form</h1> </center>
  <hr>
<label> Police Name: </label>
<input type="text" name="username" placeholder="Police Name" required />
<!-- <label> Lastname:  </label>
<input type="text" name="lastname" placeholder="Lastname" size="15"required /> -->
<div>
  <label>
  Phone :
  </label>
  <!-- <input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/> -->
  <input type="text" name="phone" placeholder="phone number" size="10"/ required>
</div>
<div>
  <label>
    Email:
  </label>
  <input type="email" name="mail" placeholder="Email" required>
</div>

<div >
  <label>Join Date</label>
  <input type="date" name="join">
</div>
<div >
  <label>age</label>
  <input type="text" name="age">
</div>

<div>
Police Address :
<textarea cols="80" rows="5" name='address' placeholder="Current Address"  required>
</textarea>


    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <!-- <label><b>Conform Password</b></label>
    <input type="password" placeholder="Conform Password" name="con_password" required> -->
    <button type="submit" class="registerbtn">Register</button>

</form>
</body>
  <center><a href="action.php"><button class="btn" type="button" ><b>Go Back<b></button></a></center>
</html>
