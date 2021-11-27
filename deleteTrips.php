<?php
   include 'connectdb.php';

   $delete= $_POST["delete"];
   $tripid = $_POST["tripid"];
   echo $tripid . $delete;
/*
  
   if($tripid != NULL){
   $query1= "DELETE FROM bustrips where tripid = ". $tripid ;
   $result=mysqli_query($connection,$query1);
   if (!$result) {
    die("Failed query");
   }
  
}
*/
mysqli_close($connection);
?>