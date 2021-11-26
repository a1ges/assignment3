<?php

include 'connectdb.php';
// Selecting all elements from bustrips   
$query = "SELECT * FROM bustrips";
// if Orderasc radio button selected. Order by ascending tripname (work out for country as well)
   $input = $_POST['ordering'];
   if($input == "orderasc") $query .= " ORDER BY " . $_POST[tripnameOcountry]. " ASC";

// same as previous line but descending
   if($input == "orderdesc") $query .=" ORDER BY " . $_POST[tripnameOcountry]. " DESC";
   $result = mysqli_query($connection,$query) or die(mysqlerror());
// if not dead result , print the table

if($result->num_rows>0){
echo "<table id = \"tripstable\">";
echo "<tr>";
echo "<th>Trip Name</th>";
echo "<th>Country</th>";
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