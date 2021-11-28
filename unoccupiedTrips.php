<?php 

include 'connectdb.php';
$query = "SELECT * FROM bustrips WHERE tripid NOT IN(SELECT tripid FROM bookings)";


$result = mysqli_query($connection,$query) or die(mysqlerror());
echo "<table>";
if($result->num_rows>0){

     while($row = $result->fetch_assoc()){
        echo "</td>";
        echo "<td style=\"text-align:center\">";
        echo $row["tripname"];
        echo "</td>";
     	echo "</tr>"; 
     }
 }
 else{
     echo "<br> No unoccupied buses :)" ;
 }
 echo "</table>";
 ?>
