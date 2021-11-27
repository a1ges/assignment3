<?php
   include 'connectdb.php';

   $delete= $_POST["delete"];
   $tripid = $_POST["tripid"];
  

  
   if($tripid != NULL && isset($tripid)){
   $query1= "DELETE FROM bustrips where tripid = ". $tripid ;
   $result=mysqli_query($connection,$query1);
   if (!$result) {
    
    echo "<script>alert('Deletion cannot be completed. Constraint Error.');</script>";
    
    
   }
  
}

/*
echo "<form name = \"editBusTripForm\" method = \"POST\">
    <!-- Headings for row of inputs (Some edittable, some not)-->
    <tr>    
        <th></th>
        <th>Trip Image</th>
        <th>Trip Name</th>
        <th>Country</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Bus License Number</th>
        <th>Trip ID</th>
    </tr>
    <tr>    
        <!-- First table entry used to space out inputs for aesthetic reasons. -->
        <td style=\"text-align:center\"></td>
        
        <td style=\"text-align:center\"><input type=\"text\" id=\"urlimage\" name=\"urlimage\"></td>
        <td style=\"text-align:center\"><input type=\"text\" id=\"tripname\" name=\"tripname\"></td>
        <td style=\"text-align:center\"><input type=\"text\" id=\"visitedcountry\" name=\"visitedcountry\" readonly style=\"background-color: grey;\"></td>

        <!-- Note : Make sure start date < end date -->

        <td style=\"text-align:center\"><input type=\"date\" id=\"startdate\" name=\"startdate\"></td>
        <td style=\"text-align:center\"><input type=\"date\" id=\"enddate\" name=\"enddate\"></td>

        <td style=\"text-align:center\"><input type=\"text\" id=\"licenseplate\" name=\"licenseplate\"></td>
        <td style=\"text-align:center\"><input type=\"text\" id=\"trpid\" name=\"tripid\" readonly style = \"background-color: grey;\"></td>
        <td style=\"text-align:center\"><input type=\"submit\" value=\"Submit Edits\"/></td>
    </tr>  
    <?php
        include 'editbustrip.php'
    ?>
</form>";
*/
mysqli_close($connection);

?>
