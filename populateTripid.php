<?php

include 'connectdb.php';

$menu = $_POST['tripid'];

$query = "SELECT tripid FROM bustrips";
// if Orderasc radio button selected. Order by ascending tripname (work out for country as well)
   $ordering = $_POST['ordering'];
   $tripOrCountryOrdering = $_POST['tripnameOcountry'];
   if($tripOrCountryOrdering != NULL){
   if($ordering == "orderasc") $query .= " ORDER BY ". $tripOrCountryOrdering . " ASC";

// same as previous line but descending
   if($ordering == "orderdesc") $query .=" ORDER BY ". $tripOrCountryOrdering . " DESC";
   
   }
   $result = mysqli_query($connection,$query) or die(mysqlerror());
// if not dead result , print the table



?>