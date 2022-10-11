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
</head>
<body>
  <?php session_start(); ?>
<form  action="complaintreg.php" method="post">

  <div class="container">
  <center>  <h1> Police Complaint Registeration Form</h1> </center>
  <hr>
<div>
  <label>
  Complaint type
  </label>
    <select name='comp_type'>
      <option>Robbery</option>
      <option>Kidnapping</option>
      <option>Burglary</option>
      <option>Theft</option>
      <option>Domestic violence</option>
      <option>Driving Under the influence</option>
      <option>Forgery</option>
      <option>Homicide</option>

    </select>
</div>
<div>
  <label>
    Complaint Description:
  </label>
  <textarea name="txt" rows="8" cols="80" placeholder="Description"></textarea>
</div>

<div>
Police Id :
    <input type="text" placeholder="Police Id" value="<?=$_SESSION['u_id']?>" name="p_id">
  </div>
  <div>
  Police Name :
      <input type="text" placeholder="Police Id" value="<?=$_SESSION['username']?>" name="pname">
    </div>
  <!-- <div>
    Criminal Id :
        <input type="text" placeholder="Criminal Id" name="criminal_id">
  </div> -->
  <div>
    Date:
      <input type="date" name="date">
    </div>
    <button type="submit" class="registerbtn">SUBMIT</button>

</form>
</body>
  <center><a href="action.php"><button class="btn" type="button" ><b>Go Back<b></button></a></center>
</html>
