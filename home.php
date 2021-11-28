<DOCCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Agent 69's Triptastic Editor!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<script>
    function autoSubmit(){
        var formObject = document.forms['radioOptions']
        formObject.submit();
    }

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to the Western Bus Trip Editor</h1>
<br><h2> Order table below by: </h2> <br>
<!-- Form segment, creating order radio buttons and calling upon the generation of the database -->
<form name = "radioOptions" method="POST">
<!-- Ascending Order Radio Button -->
<tr> <td style="text-align:center"><input type="radio" id = "orderasc" name ="ordering"  value="orderasc" >
<label for="orderasc"> Ascending Order </label>  </td>
<!-- Country Order Radio Button -->
<td style="text-align:center"><input type="radio" id = "tripnameOcountry" name ="tripnameOcountry"  value="visitedcountry" >
<label for="orderasc"> Order by: Country names </label>  </td></tr>
<!-- Descending Order Radio Button -->
<br><tr> <td style="text-align:center"><input type="radio" id = "orderdesc" name="ordering"  value="orderdesc">
<label for="orderdesc"> Descending Order </label></td>
<!-- Trip Order Radio Button -->
<td style="text-align:center"><input type="radio" id = "tripnameOcountry" name ="tripnameOcountry"  value="tripname" >
<label for="orderasc"> Order by: Trip names </label>  </td></tr>

<!--"Submit" button -->
<br><input type="submit" value="Order Table"/>
<?php
include 'getTrips.php';
?>
</form>
<!--Call upon getTrips using radio button information -->


<!-- Form Segment , takes values from radio button in previous form (look for countryvisisted) and populate texts boxes to be editted once the "Edit" Button is clicked -->
<h2> Edit a Bus Trip </h2>
<form name = "editBusTripForm" method = "POST">
    <!-- Headings for row of inputs (Some edittable, some not)-->
    <table id = "editTable">
    <tr>    

        <th>Trip Image</th>
        <th>Trip Name</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Trip ID</th>
    </tr>
    <tr>    
        <!-- First table entry used to space out inputs for aesthetic reasons. -->
        
        <td style="text-align:center"><input type="text" id="urlimage" name="urlimage"></td>
        <td style="text-align:center"><input type="text" id="tripname" name="tripname"></td>


        <!-- Note : Make sure start date < end date -->

        <td style="text-align:center"><input type="date" id="startdate" name="startdate"></td>
        <td style="text-align:center"><input type="date" id="enddate" name="enddate"></td>

        <td style="text-align:center"><select name="tripid" id="tripid">
        <?php

            include 'connectdb.php';
            $query = "SELECT tripid FROM bustrips";
            // get trip ids
            $result = mysqli_query($connection,$query) or die(mysqlerror());
            // if not dead result , print the table
            while($row = $result->fetch_assoc()){
                echo "<option value =". $row['tripid'].">". $row['tripid'] . "</option>";
            }
        ?> </select>
        <td style="text-align:center"><input type="submit" name="submitEdit" id = "submitEdit" value="Submit Edits"/></td>
    </tr>
    <?php
    if(isset($_POST['submitEdit']) ){
    include 'editbustrip.php';
    }
    ?>  
   </table>
</form>
<h2> Add a Bus Trip </h2>

 <!--Form for adding bustrips given via user input -->


<form name = "addBusTrip" method = "POST">
    <!-- Headings for row of inputs (Some edittable, some not)-->
    <table id = "addTrip">
    <tr>    
        <th>Trip Image</th>
        <th>Trip Name</th>
        <th>Country</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th> Bus License </th>
        <th>Trip ID</th>
    </tr>
    <tr>    
        <!--  -->
        
        <td style="text-align:center"><input type="text" id="urlimage" name="urlimage"></td>
        <td style="text-align:center"><input type="text" id="tripname" name="tripname"></td>
        <td style="text-align:center"><input type="text" id="country" name="country"></td>
        <td style="text-align:center"><input type="date" id="startdate" name="startdate"></td>
        <td style="text-align:center"><input type="date" id="enddate" name="enddate"></td>
        <td style="text-align:center"><select name="busid" id="busid">
        <?php

            include 'connectdb.php';
            $query = "SELECT * FROM buses";
            // get trip ids
            $result = mysqli_query($connection,$query) or die(mysqlerror());
            // if not dead result , print the table
            while($row = $result->fetch_assoc()){
                echo "<option value =". $row['licenseplate'].">". $row['licenseplate'] . "</option>";
            }
        ?> </select>
        <td style="text-align:center"><input name="tripid" id="tripid"></td>
        <td style="text-align:center"><input type="submit" name="submitAdd" value="Submit New Trip"/></td>
    </tr>
    <?php
    if( $_POST['tripid'] == ""){
        $error="Please enter a Trip id<br>"; 
    }
    if( $_POST['country'] == ""){
        $error="Please enter a Country Name<br>"; 
    }
    if( $_POST['tripname'] == ""){
        $error="Please enter a Trip Name<br>"; 
    }
    if( $_POST['startdate'] == ""){
        $error="Please enter a Start Date<br>"; 
    }
    if( $_POST['enddate'] == ""){
        $error="Please enter an End Date<br>"; 
    }
        if(isset($_POST['submitAdd'])){
            include "addTrips.php";
            }
    ?>
   </table>
</form>

<!--Form for viewing bustrips given a country from the drop down list -->
<form name = "viewCountry" method="POST">
<h2>Show Bustrips of given country </h2>
<tr>
 <td style="text-align:center"><select name="countryName" id="countryName">
        <?php

            include 'connectdb.php';
            $query = "SELECT visitedcountry FROM bustrips";
            // get trip ids
            $result = mysqli_query($connection,$query) or die(mysqlerror());
            // if not dead result , print the table
            while($row = $result->fetch_assoc()){
                echo "<option value =". $row['visitedcountry'].">". $row['visitedcountry'] . "</option>";
            }
        ?> </select>
</td>
<td style="text-align:center"><input type="submit" name="submitCountry" id="submitCountry" value="Query Country"/></td>
	
        <?php

  // Something posted
  
  if (isset($_POST['submitCountry'])) {
	echo "Button Pressed";    
          include 'viewCountry.php';

  } 


        ?>
</form>

<form name = "addBooking" method = "POST">
    <!-- Headings for row of inputs (Some edittable, some not)-->
    <table id = "addTrip">
    <tr>    
        <th>Passenger ID</th>
        <th>Trip ID</th>
        <th>Price of Trip</th>

    </tr>
    <tr>    
        <!--  -->
        
    
        <td style="text-align:center"><select name="passengerid" id="passengerid">
        <?php

            include 'connectdb.php';
            $query = "SELECT * FROM passenger";
            // get trip ids
            $result = mysqli_query($connection,$query) or die(mysqlerror());
            // if not dead result , print the table
            while($row = $result->fetch_assoc()){
                echo "<option value =". $row['passengerid'].">". $row['passengerid'] . " - " . $row['firstname'] . " " . $row['lastname'] . "</option>";
            }
        ?> </select>
        <td style="text-align:center"><select name="tripid" id="tripid">
        <?php

            include 'connectdb.php';
            $query = "SELECT * FROM bustrips";
            // get trip ids
            $result = mysqli_query($connection,$query) or die(mysqlerror());
            // if not dead result , print the table
            while($row = $result->fetch_assoc()){
                echo "<option value =". $row['tripid'].">". $row['tripid'] . " - " . $row['tripname']. "</option>";
            }
        ?> </select>
        <td style="text-align:center">$<input type="text" id="price" name="price"></td>

        <td style="text-align:center"><input type="submit" name="submitBook" id="submitBook" value="Book your trip!"/></td>
    </tr>
        </table>
    <?php
         
         if (isset($_POST['submitBook'])) {
            echo "Button Pressed";    
            include "booktrip.php";
        
          } 
         
    ?>
   </table>
</form>

<form name ="passengerTable" method="POST"  >
<table>

    <!-- table headings -->
<tr>    
        <th>    Select          </th>
        <th>    Passenger ID    </th>
        <th>    First Name  </th>
        <th>    Last Name   </th>
        <th>    Passport Number </th>
        <th>    Country of Citizenship  </th>
        <th>    Expiry Date </th>
        <th>    Birth date  </th>
    </tr>
    <?php
    
    
    include "passengerTable.php"
    
    
    ?>
<!-- SQL Query : select * from passenger INNER JOIN passports ON passports.passengerid = passenger.passengerid order by passenger.lastname  asc; --> 

</table>

<?php 

include "showPassengerBookings.php";

?>
        </form>


        <form name = "emptyBuses">
          
        
        <table>
           
            <th> Unoccupied Bus Trips </th>
            
        </table>
        <?php
                include 'unoccupiedTrips.php';
            ?>
        </form>

</body>
</html>



