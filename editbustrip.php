<?php
include 'connectdb.php';
// get values from textboxes

$urlimage = $_POST['urlimage'];
$tripname = $_POST['tripname']; // countryvisited
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$tripid = $_POST['tripid'];
    echo "<h1>". $tripid. "</h1>";
    $query1= "UPDATE bustrips SET tripname = \'". $tripname."\' , startdate =\'". $startdate ."\' , enddate =\'". $enddate . "\'  where tripid = ". $tripid ;
    $result=mysqli_query($connection,$query1);
    if (!$result) {
        die("database edit failed.");
    }
    else{
        echo "<script>alert('Edit Complete');</script>";
    }
?>