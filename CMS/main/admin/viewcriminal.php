<style media="screen">
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
table {
  border-collapse: collapse;
  margin-top: 1%;
  width:50%;
  margin-left: 0%;
  /* margin-top: 10%; */
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
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<?php
session_start();
    include '../adminheader.html';
    echo "<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for names..'>";
   $con=mysqli_connect("localhost","root","","crime");
   // Check connection
   if(mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $result = mysqli_query($con,"SELECT * FROM criminal");

   echo "<table border='1' id='myTable'>
      <tr class='header'>
         <th>Id</th>
         <th>Name</th>
         <th>Crime Type</th>
         <th>Age</th>
         <th>Phone</th>
         <th>Address</th>
      </tr>";

   while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['criminal_id'] . "</td>";
      echo "<td>" . $row['criminal_name'] . "</td>";
      echo "<td>" . $row['crime_type'] . "</td>";
      echo "<td>" . $row['age'] . "</td>";
      echo "<td>" . $row['criminal_add'] . "</td>";
      echo "<td>" . $row['criminal_pno'] . "</td>";

      echo "</tr>";
   }
   echo "</table>";

   mysqli_close($con);
?>
<br><center><a href="action.php"  ><button  class="btn" ><b>GO BACK</b></button></a>
</center>
