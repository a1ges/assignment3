<?php
   include 'connectdb.php';
   echo "<script>alert('Deletion cannot be completed. Constraint Error.');</script>";
   echo "Hello";

   $delete= $_GET["delete"];
   $tripid_ = $_GET["tripid"];
   

  
   
   $query1= "DELETE FROM bustrips where tripid = '". $tripid_ . "'" ;
   echo $query1;
   $result=mysqli_query($connection,$query1);
   if (!$result) {
    echo "<script>alert('Deletion cannot be completed. Constraint Error.');</script>";
    }
    
   
  



/*

*/
mysqli_close($connection);

?>
