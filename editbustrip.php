<?php
include 'connectdb.php';
// get values from textboxes

$urlimage = $_POST['urlimage'];
$tripname = $_POST['tripname']; // countryvisited
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$tripid = $_POST['tripid'];
    echo "<h1>". $tripid. "</h1>";


?>