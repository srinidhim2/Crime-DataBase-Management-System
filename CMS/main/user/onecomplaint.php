<style media="screen">
table {
  border-collapse: collapse;
  width: 50%;
  margin-left: 25%;
  margin-top: 1%;
}
.btn:hover{
  background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(158,176,27,1) 35%, rgba(0,212,255,1) 100%);
  /* background-color: white; */
border: none;
color: brown;
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

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
<?php
session_start();
include 'userheader.php';
   $con=mysqli_connect("localhost","root","","crime");
   // Check connection
   if(mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sam=$_SESSION['u_id'];

   $result = mysqli_query($con,"CALL `getcomplaint`();");

   echo "<table border='1'>
      <tr>
         <th>Complaint Id</th>
         <th>Complaint Type</th>
         <th>Complaint Description</th>
         <th>Police Id</th>
          <th>Police Name</th>
         <th>Criminal Id</th>
         <th>Date</th>
         <th>Cleared</th>
         <th>Edit</th>
      </tr>";

   while($row = mysqli_fetch_array($result)) {
     if($row['cleared']==0 && $row['p_id']==$sam)
     {


      echo "<tr>";
      echo "<td>" . $row['complaint_id'] . "</td>";
      echo "<td>" . $row['complaint_type'] . "</td>";
      echo "<td>" . $row['complaint_desc'] . "</td>";
      echo "<td>" . $row['p_id'] . "</td>";
      echo "<td>" . $row['pname'] . "</td>";
      echo "<td>" . $row['criminal_id'] . "</td>";
      echo "<td>" . $row['date'] . "</td>";
      echo "
        <td width='140px'>
        <form action='accept.php' method='get'>
          <a href='accept.php'><button class='button1' name='status' value=".$row['complaint_id'].">Approve</button></a>
        </form>
      </td>"
      ;


      echo "
        <td width='140px'>
        <form action='updatecomp.php' method='get'>
          <button class='button1' name='status' value=".$row['complaint_id'].">Edit</button></a>
        </form>
      </td>"
      ;
        echo "</tr>";
   }
 }
   echo "</table>";

   mysqli_close($con);
?>
<br><center><a href="action.php"  ><button  class="btn" ><b>GO BACK</b></button></a>
</center>
