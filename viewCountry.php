<?php

include 'connectdb.php';
// Selecting all elements from bustrips   
$query = "SELECT * FROM bustrips";
$country = $_GET['countryName'];
  if($country != NULL) $query .=" WHERE visitedcountry = '". $country . "'";
   
   $result = mysqli_query($connection,$query) or die(mysqlerror());
// if not dead result , print the table

if($result->num_rows>0){
   echo "<br><h2> Current Trips: </h2>";
   echo "<form name = \"selectCountry\" method = \"POST\">";


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
     // add radio button for easier country editting
     

     
     echo "<td style=\"text-align:center\">";
     if($row["urlimage"] != NULL){
     echo "<img src=". $row["urlimage"] ." width=\"100\" height=\"100\">";
     }else{
      echo "<img src= https://icon-library.com/images/null-icon/null-icon-1.jpg width=\"100\" height=\"100\"> ";
     }
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
echo "</table>";
echo "</form>";
}
else{
	echo "Zero results :(";
} 






?>
