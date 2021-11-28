<?php
include 'connectdb.php';
$query = "SELECT * FROM passenger INNER JOIN passports ON passports.passengerid = passenger.passengerid ORDER BY passenger.lastname  ASC";

$result = mysqli_query($connection,$query) or die(mysqlerror());

if($result->num_rows>0){

     while($row = $result->fetch_assoc()){
      echo "<tr>";
      // add radio button for easier country editting
      echo "</td>";
      echo "<td style=\"text-align:center\">";
      echo $row["passengerid"];
      echo "</td>";
      echo "<td style=\"text-align:center\">";
      echo $row["firstname"];
      echo "</td>";
      echo "<td style=\"text-align:center\">";
      echo $row["lastname"];
      echo "</td>";
      echo "<td style=\"text-align:center\">";
      echo $row["passportnumber"];
      echo "</td>";
      echo "<td style=\"text-align:center\">";
      echo $row["countryofcitizenship"];
      echo "</td>";
      echo "<td style=\"text-align:center\">";
      echo $row["expirydate"];
      echo "</td>";
      echo "<td style=\"text-align:center\">";
      echo $row["birthdate"];
      echo "</td>";
      echo "</tr>";	
      
 }


 }
 else{
     echo "Zero results :(";
 } 

 mysqli_close($connection);
?>