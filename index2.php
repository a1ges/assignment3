<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Agent 69's Triptastic Editor!</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to the Western Bus Trip Editor</h1>
<form action="getdata.php" method="POST">
<input type="radio" id = "orderasc" name ="orderingasc"  value="orderasc">
<label for="orderasc"> Ascending Order </label><br>
<input type="radio" id = "orderdesc" name="orderingdesc"  value="orderdesc">
<label for="orderdesc"> Descending Order </label><br>
</form>
<?php


// Selecting all elements from bustrips   
$query = "SELECT * FROM bustrips";
// if Orderasc radio button selected. Order by ascending tripname (work out for country as well)
   if(isset($_GET['orderingasc'])) $query .= " ORDER BY tripname ASC"; 
// same as previous line but descending
   if(isset($_GET['orderingdesc'])) $query .=" ORDER BY tripname DESC";
   $result = mysqli_query($connection,$query) or die(mysqlerror());
// if not dead result , print the table

if($result->num_rows>0){
echo "<table id = \"tripstable\">";
echo "<tr>";
echo "<th onclick=\"sortTable(0)\">Trip Name</th>";
echo "<th onclick=\"sortTable(1)\">Country</th>";
echo "<th>Start Date</th>";
echo "<th>End Date</th>";
echo "<th>Bus License Number</th>";
echo "<th>Trip ID</th>";
	while($row = $result->fetch_assoc()){
     echo "<tr>";
     echo "<td style=\"text-align:center\">";
     echo $row["tripname"];
     echo "</td>";
     echo "<td style=\"text-align:center\">";
     echo $row["visitedcountry"];
     echo "</td>";
     echo "<td style=\"text-align:center\">";
     echo $row["startdate"];
     echo "</td>";
     echo "<td style=\"text-align:center\">";
     echo $row["enddate"];
     echo "</td>";
     echo "<td style=\"text-align:center\">";
     echo $row["licenseplate"];
     echo "</td>";
     echo "<td style=\"text-align:center\">";
     echo $row["tripid"];
     echo "</td>";
     echo "</tr>";	
}

}
else{
	echo "Zero results :(";
} 


mysqli_free_result($result);
mysqli_close($connection);
?>
</body>
</html>

