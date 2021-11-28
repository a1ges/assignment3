<?php
   include 'connectdb.php';

   echo "Hello";
if(isset(_POST['selectCountry'])){
   $delete= $_POST["deleteBookingRadio"];
   $tripid_ = $_POST["deleteBooking"];
    echo "<br> Hello world";

  
   if($tripid_ != NULL && isset($tripid_)){
   $query1= "DELETE FROM bustrips where tripid = '". $tripid_ . "'" ;
   echo "<h1>" . $query1 . "</h1>";
   //$result=mysqli_query($connection,$query1);
   if (!$result) {
    if(isset($delete)){
   // echo "<script>alert('Deletion cannot be completed. Constraint Error.');</script>";
    }
    
   }
  
}
}

/*

*/
mysqli_close($connection);

?>
