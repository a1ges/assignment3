<?php

include 'connectdb.php';

$query = "INSERT INTO bookings";
$passengerid = $_POST['passengerid'];
$tripid = $_POST['tripid'];
$price = $_POST['price'];

if($passengerid != NULL && $tripid!=NULL){
    $result = mysqli_query($connection,$query) ;
    if (!$result) {
        die("<script>alert('Invalid query please try again'); window.location.reload();</script>");
    }
    else{
        echo "<script>alert('Edit Complete');</script>";
    
}

}


?>