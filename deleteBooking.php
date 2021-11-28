<?php

echo "<script>alert('Deleting Booking');</script>";
$bookingid = $_POST['deleteBookingRadio'];
$firstnameDelim = $_POST['deleteBooking'];


$deletion = "DELETE FROM bookings where price in (select * from (select price from trips, bookings where trips.tripID = bookings.tripID AND tripname = '".$tripName."') tblTmp) AND price = ".$price;





?>