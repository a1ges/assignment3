
<?php
// Connect to DB 
include 'connectdb.php';
$query = "SELECT * FROM bustrips";

    $populate= $_POST["populateEdit"];
    $tripid = $_POST["tripid"];
    if(isset($populate)){
        echo "<h1>" .$populate . " " . $tripid. "</h1>";
    }





?>