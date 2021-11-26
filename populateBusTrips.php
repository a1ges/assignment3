<?php 
include 'connectdb.php';
include 'home.php';

$visitedCountry = $_POST['countrySelect'];
$query = "SELECT * FROM bustrips WHERE visitedcountry = " .  $visitedCountry . ";";

echo "$query";
// This document is used to populate the textboxes with predefined data which can be editted by the user
      // get country name
     

?>