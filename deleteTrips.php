<?php
   include 'connectdb.php';

   $delete= $_POST["delete"];
if(isset($delete)){
   $tripid = $_POST["tripid"];
   if($tripid != NULL){
   $query1= "DELETE * FROM bustrips where tripid = ". $tripid ;
   $result=mysqli_query($connection,$query1);
   if (!$result) {
    echo "Cannot Delete";
   }
  
}
}
mysqli_close($connection);
?>