<?php
// get values from textboxes
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitEdit'])) {
    
        include 'connectdb.php';

$urlimage = $_POST['urlimage'];
$tripname = $_POST['tripname']; // countryvisited
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
if($startdate > $enddate){
    $temp = $startdate;
    $startdate = $enddate;
    $enddate = $temp;
}
$tripid = $_POST['tripid'];

$preceeded = false;
    //echo "<h1>". $tripid. "</h1>";
    $query1= "UPDATE bustrips SET " ;// where tripid = ". $tripid ;\
    if($tripname != NULL){
        $query1 .=  "tripname ='".$tripname."'";
        $preceeded =true;
    }
    if($startdate != NULL){
        if($preceeded == true){ $query1 .= ", ";}
        $query1 .= "startdate ='". $startdate. "'" ;
        $preceeded == true;
        
    }
    if($enddate != NULL){
        if($preceeded = true){ $query1 .= ", ";}
        $query1 .= "enddate ='". $enddate . "'";
        $preceeded == true;
    
    }
    if($urlimage !=NULL){
    if($preceeded = true){ $query1 .= ", ";}
    $query1 .= "urlimage = '". $urlimage. "'";

    }
    $query1 .= " WHERE tripid =". $tripid;
    // debugging : echo "<h1>" . $query1 . "</h1>";
    
    $result=mysqli_query($connection,$query1) or die("<script>alert(' went wrong! Please refresh your page! ');</script>");;
    if (!$result) {
        die();
    }
    else{
        echo "<script>alert('Edit Complete');</script>";
    
}
mysqli_close($connection);
}


?>