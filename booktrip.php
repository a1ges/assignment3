<?php

include 'connectdb.php';

$query = "INSERT INTO bookings VALUES(";
$passengerid = $_POST['passengerid'];
$tripid = $_POST['tripid'];
$price = $_POST['price'];

if($passengerid != NULL && $tripid!=NULL){
    $query .= $passengerid . " , " . $tripid . " , " . $price . ")";
    echo "<h1>". $query . "<h1>";
    $result = mysqli_query($connection,$query) ;
    if (!$result) {
        die("<script>alert('Invalid query please try again'); </script>");
    }
    else{
        echo "<script>alert('Edit Complete');</script>";
    
}

}


?>