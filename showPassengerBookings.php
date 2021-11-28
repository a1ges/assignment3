<?php
include "connectdb.php";
$submitted = $_POST['seePassengerBookings'];
$passengerid = $_POST['passengerid'];

if(isset($submitted) && isset($submitted)){


$query = "SELECT * from bookings INNER JOIN passenger ON bookings.passengerid = passenger.passengerid INNER JOIN bustrips ON bookings.tripid = bustrips.tripid WHERE bookings.passengerid = \"" . $passengerid . "\"";

// debugging: echo $query;
$result = mysqli_query($connection,$query) or die(mysqlerror());
if($result->num_rows>0){
    echo "<br><h2> Current Bookings: </h2>";
    echo "<form name = \"bookingTable\" id = \"bookingTable\"  method = \"POST\" >";
    echo "<table id = \"passengerBookingTable\">";
 echo "<tr>";
 echo "<th> Select </th>";
 echo "<th> First Name</th>";
 echo "<th> Last Name</th>";
 echo "<th>Passport Number</th>";
 echo "<th>Country</th>";
 echo "<th>Start Date</th>";
 echo "<th>End Date</th>";
 echo "<th>Bus License Number</th>";
 echo "<th>Trip ID</th>";
     while($row = $result->fetch_assoc()){
      echo "<tr>";
      // add radio button for easier country editting
      
      echo "<td style=\"text-align:center\">";
      echo "<input type=\"radio\" id = \"deleteBookingRadio\" name =\"deleteBookingRadio\" value=". $row['tripid']. " width=\"100\" height=\"100\" >";
      echo "</td>";
      
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
      echo "<td style=\"text-align:center\">";
      echo $row["tripid"];
      echo "</td>";
      
      echo "</tr>";	
 }
 echo "<td style=\"text-align:center\"><input type=\"submit\" id = \"". $row['firstname'] . "\"  name = \"deleteBooking\"value=\"Delete Selected\"></td>";
 echo "<?php
 include 'deleteBooking.php';
 ?>";
 echo "</table>";
 
 }
 else{
     echo "Zero results :(";
 } 

 
}
mysqli_close($connection);

?>