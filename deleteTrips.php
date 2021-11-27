<?php
   include 'connectdb.php';

   $delete= $_POST["delete"];
if(isset($delete)){
   $tripid = $_POST["tripid"];
   if($tripid != NULL){
   //$query1= "DELETE * FROM bustrips where tripid = ". $tripid ;
   //$result=mysqli_query($connection,$query1);
   if (!$result) {
          die("Query failed");
   }else{

   }
   $row=mysqli_fetch_assoc($result);
   
   $delete_row_query = ""
   //if (!mysqli_query($connection, $query)) {
      //  die("Error: insert failed" . mysqli_error($connection));
    //}
   
  
   //} //else {
       //echo "Invalid deletion request";
   //}
}
mysqli_close($connection);
?>
</ol>
</body>
</html>
