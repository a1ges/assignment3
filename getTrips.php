<?php

include 'connectdb.php';
// Selecting all elements from bustrips   
$query = "SELECT * FROM bustrips";
// if Orderasc radio button selected. Order by ascending tripname (work out for country as well)
   $ordering = $_POST['ordering'];
   $tripOrCountryOrdering = $_POST['tripnameOcountry'];
   if($tripOrCountryOrdering != NULL){
   if($ordering == "orderasc") $query .= " ORDER BY ". $tripOrCountryOrdering . " ASC";

// same as previous line but descending
   if($ordering == "orderdesc") $query .=" ORDER BY ". $tripOrCountryOrdering . " DESC";
   
   }
   $result = mysqli_query($connection,$query) or die(mysqlerror());
// if not dead result , print the table

if($result->num_rows>0){
echo "<form name = \"selectCountry\" method = \"POST\">";
   echo "<table id = \"tripstable\">";
echo "<tr>";
echo "<th> Select Trip</th>";
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
     echo "<input type=\"radio\" id = \"countrySelect\" name =\"countrySelect\" value=". $row['visitedcountry']. " width=\"100\" height=\"100\">";
     echo "</td>";
     echo "<td style=\"text-align:center\">";
     if($row["urlimage"] != NULL){
     echo "<img src=". $row["urlimage"] .">";
     }ELSE{
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

}
else{
	echo "Zero results :(";
} 

echo "</form>";
echo "<?php include 'populateBusTrips.php' ; ?>";
mysqli_free_result($result);
mysqli_close($connection);
?>