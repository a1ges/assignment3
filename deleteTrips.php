<?php
   include 'connectdb.php';

   $delete= $_POST["delete"];
   $tripid = $_POST["tripid_"];
  

  
   if($tripid != NULL && isset($tripid)){
   $query1= "DELETE FROM bustrips where tripid = ". $tripid ;
   $result=mysqli_query($connection,$query1);
   if (!$result) {
    if(isset($delete)){
    echo "<script>alert('Deletion cannot be completed. Constraint Error.');</script>";
    }
    
   }
  
}

/*

*/
mysqli_close($connection);

?>
