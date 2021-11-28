<?php
include "connectdb.php";
$submitted = $_POST['seePassengerBookings'];
$passengerid = $_POST['passengerid'];

if(isset($submitted) && isset($submitted)){


$query = "SELECT * from bookings INNER JOIN passenger ON bookings.passengerid = passenger.passengerid WHERE bookings.passengerid = \"" . $passengerid . "\"";

echo $query;

}
mysqli_close($connection);

?>