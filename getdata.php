<?php

include 'connectdb.php';
// Selecting all elements from bustrips   
$query = "SELECT * FROM bustrips";
// if Orderasc radio button selected. Order by ascending tripname (work out for country as well)
   $ordering = $_POST['ordering'];
   $tripOrCountryOrdering = $_POST['tripnameOcountry'];
   if($ordering == "orderasc") $query .= " ORDER BY ". $tripOrCountryOrdering . " ASC";

// same as previous line but descending
   if($ordering == "orderdesc") $query .=" ORDER BY ". $tripOrCountryOrdering . " DESC";
   $result = mysqli_query($connection,$query) or die(mysqlerror());
// if not dead result , print the table

if($result->num_rows>0){
echo "<table id = \"tripstable\">";
echo "<tr>";
echo "<th> Trip Image</th>";
echo "<th>Trip Name</th>";
echo "<th>Country</th>";
echo "<th>Start Date</th>";
echo "<th>End Date</th>";
echo "<th>Bus License Number</th>";
echo "<th>Trip ID</th>";
	while($row = $result->fetch_assoc()){
     echo "<tr>";
     echo "<td style=\"text-align:center\">";
     echo $row["urlimage"];
     echo "</td>";
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