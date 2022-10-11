<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;

}

.navbar {
  overflow: hidden;
  background-color: #333;
  margin-left: -1.2%;
  margin-top: -0.6%;
  margin-right: -1%;



}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.log{
  float: right;
}
</style>
</head>
<body>
<div class="navbar">
  <a href="action.php">Dashboard</a>
  <div class="dropdown">
    <button class="dropbtn">User update
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="update.php">Update user</a>
          <a href="addphoto.php">Add Photo</a>

    </div>
  </div>
  <div class="dropdown">
      <a href="complaint.php">Register Complaint</a>
    </div>
    <div class="dropdown">
        <a href="criminal_detl.php">Register Criminal</a>
      </div>
  <div class="dropdown">
    <button class="dropbtn">Complaints
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="onecomplaint.php">View Complaints</a>
          <a href="viewcomp.php">View all Complaints</a>
      <a href="viewall.php">Complaint History</a>

    </div>
  </div>
  <div class="log">


  <div class="dropdown">
    <button class="dropbtn">Welcome <?=$_SESSION['username']?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="logout.php">LOGOUT</a>
      </div>
    </div>
  </div>
</div>
</div>



</body>
</html>
