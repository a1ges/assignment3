<?php
include 'connectdb.php';
// get values from textboxes

$urlimage = $_POST['urlimage'];
$tripname = $_POST['tripname']; // countryvisited
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$tripid = $_POST['tripid'];

$preceeded = false;
    echo "<h1>". $tripid. "</h1>";
    $query1= "UPDATE bustrips SET " ;// where tripid = ". $tripid ;\
    if($tripname != NULL){
        $query1 .=  "tripname =\'".$tripname."\'";
        $preceeded =true;
    }
    if($startdate != NULL){
        if($preceeded == true){ $query1 .= ", ";}
        $query1 .= "startdate =". $startdate ." , enddate =". $enddate . "\'";
        $preceeded == true;
        
    }
    if($enddate != NULL){
        if($preceeded = true){ $query1 .= ", ";}

        $end = 'enddate';
        $preceeded == true;
    
    }
    
    if($preceeded = true){ $query1 .= ", ";}
    $query1 .= "urlimage = \'". $urlimage . "\' WHERE tripid =". $tripid;
    $result=mysqli_query($connection,$query1);
    if (!$result) {
        die("database edit failed.");
    }
    else{
        echo "<script>alert('Edit Complete');</script>";
    }
?>