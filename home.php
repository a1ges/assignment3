<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Agent 69's Triptastic Editor!</title>
<script>
    function autoSubmit(){
        var formObject = document.forms['radioOptions']
        formObject.submit();
    }
    </script>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to the Western Bus Trip Editor</h1>

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
<br><input type="submit" value="submit"/>
</form>
<!--Call upon getTrips using radio button information -->
<?php
include 'getTrips.php'
?>

<!-- Form Segment , takes values from radio button in previous form (look for countryvisisted) and populate texts boxes to be editted once the "Edit" Button is clicked -->

<form>
    <!-- Headings for row of inputs (Some edittable, some not)-->
    <tr>    
        <th></th>
        <th>Trip Image</th>
        <th>Trip Name</th>
        <th>Country</th>"
        <th>Start Date</th>
        <th>End Date</th>"
        <th>Bus License Number</th>
        <th>Trip ID</th>"
    </tr>
    <tr>    

        <td style="text-align:center"></td>
        <td style="text-align:center"><input type="text" id="fname" name="fname"></td>"
        <td style="text-align:center"><input type="text" id="fname" name="fname"></td>
        <td style="text-align:center"><input type="text" id="countryName" name="countryName" readonly style="background-color: grey;"></td>"

        <!-- Note : Make sure start date < end date -->

        <td style="text-align:center"><input type="date" id="startdate" name="startdate"></td>
        <td style="text-align:center"><input type="date" id="endDate" name="endDate"></td>"

        <td style="text-align:center"><input type="text" id="fname" name="fname"></td>"
        <td style="text-align:center"><input type="text" id="trpid" name="tripid" readonly style = "background-color: grey;"></td>"
    </tr>
    
</form>
</body>
</html>

