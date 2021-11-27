<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $urlimage = $_POST['urlimage'];
    $tripname = $_POST['tripname']; // countryvisited
    $visitedcountry = $_POST['country'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $licenseplate = $_POST['buslicense'];
    // flip dates if it start date is after end date
    if($startdate > $enddate){
        $temp = $startdate;
        $startdate = $enddate;
        $enddate = $temp;
    }
    if($urlimage == NULL || $tripname == NULL || $visitedcountry == NULL || $startdate == NULL || $enddate == NULL || $licenseplate == NULL){
       echo " <script>alert('Please enter all asteriksed values before submitting a bustrip'); window.location.reload();</script>";
    }


}





?>