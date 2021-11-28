<?php 

include 'connectdb.php';
$query = "SELECT bustrips.tripname FROM bustrips INNER JOIN bookings ON bustrips.tripid = bookings.tripid INNER JOIN buses ON buses.licenseplate = bustrips.licenseplate GROUP BY bustrips.tripname HAVING (COUNT(bookings.tripid) = 0) ";

$result = mysqli_query($connection,$query) or die(mysqlerror());
echo "<table>";
if($result->num_rows>0){

     while($row = $result->fetch_assoc()){
        echo "</td>";
        echo "<td style=\"text-align:center\">";
        echo $row["tripname"];
        echo "</td>";
      
     }
 }
 else{
     echo "<br> No unoccupied buses :)" ;
 }
 echo "</table>";
 ?>