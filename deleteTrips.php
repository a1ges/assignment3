<?php
   include 'connectdb.php';

   $delete= $_POST["delete"];

   $tripid = $_POST["tripid"];
   if($tripid != NULL){
   $query1= "DELETE FROM bustrips where tripid = ". $tripid ;
   $result=mysqli_query($connection,$query1);
   if (!$result) {
    echo '<script>alert("This Bus Trip cannot be deleted, there are constraints.")</script>';
   }
  
}

mysqli_close($connection);
?>