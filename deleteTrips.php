<?php
   include 'connectdb.php';
   echo "<script>alert('Deletion cannot be completed. Constraint Error.');</script>";
   echo "Hello";

   $delete= $_POST["delete"];
   $tripid_ = $_POST["tripid"];
    echo "<br> Hello world";

  
   
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
