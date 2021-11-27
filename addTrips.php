<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "connectdb.php";
    $urlimage = $_POST['urlimage'];
    $tripname = $_POST['tripname']; // countryvisited
    $visitedcountry = $_POST['country'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $licenseplate = $_POST['buslicense'];
    $tripid = $_POST['tripid'];
    // flip dates if it start date is after end date
    if($startdate > $enddate){
        $temp = $startdate;
        $startdate = $enddate;
        $enddate = $temp;
    }
    if( $tripname == NULL || $visitedcountry == NULL || $startdate == NULL || $enddate == NULL || $licenseplate == NULL){
       echo " <script>alert('Please enter all asteriksed values before submitting a bustrip'); ";
    }
            else{

                    // the assumption is that all data besides the url are guarenteed so the sql here is trivial
                    $query = "INSERT INTO bustrips VALUES ('" . $tripid. "','" . $tripname . "','" . $startdate . "','" . $enddate . "','" . $visitedcountry . "','" . $licenseplate . "','" . $urlimage . "')"  ;
                    echo "<h1>". $query . "</h1>";
                    $result=mysqli_query($connection,$query);
                            if (!$result) {
                                die("<script>alert('Invalid query please try again'); </script>");
                            }else{echo "<script>alert('Trip successfully inserted'); </script>";}
        }

}



// window.location.reload();

?>