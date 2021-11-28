<?php

echo "<script>alert('Deleting Booking');</script>";
$bookingid = $_POST['deleteBookingRadio'];
$firstnameDelim = $_POST['deleteBooking'];


$query1 = "DELETE FROM bookings where price in (select * from (select price from trips, bookings where trips.tripID = bookings.tripID AND tripname = '".$tripName."') tblTmp) AND price = ".$price;

$result=mysqli_query($connection,$query1);
   if (!$result) {
    echo "<script>alert('Deletion cannot be completed. Constraint Error.');</script>";
    }
    
   
  



/*

*/
mysqli_close($connection);



?>