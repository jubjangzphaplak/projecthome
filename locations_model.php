<?php
require("db.php");

// Gets data from URL parameters.
if(isset($_GET['add_location'])) {
    add_location();
}


function add_location(){
   
//$host = "localhost";
//$user = "root";
//$pass = "12345678";
//$nameDB = "location";

$con = mysqli_connect($host,$user,$pass,$nameDB);
mysqli_query($con, "SET NAMES 'utf8' ");
if($con == TRUE){
   // echo 'เชื่อมได้';
}else{
    echo 'เชื่อมไม่ได้';
}

    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    // Inserts new row with place data.
    $query = sprintf("INSERT INTO test " .
        " (id, lat, lng) " .
        " VALUES (NULL, '%s', '%s');",
        mysqli_real_escape_string($con,$lat),
        mysqli_real_escape_string($con,$lng));

    $result = mysqli_query($con,$query);
    echo json_encode("Inserted Successfully");
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }
}
function get_saved_locations(){
   
$host = "localhost";
$user = "root";
$pass = "";
$nameDB = "location";

$con = mysqli_connect($host,$user,$pass,$nameDB);
mysqli_query($con, "SET NAMES 'utf8' ");
if($con == TRUE){
   // echo 'เชื่อมได้';
}else{
    echo 'เชื่อมไม่ได้';
}

    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($con,"select lng,lat from test ");

    $rows = array();
    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }
    $indexed = array_map('array_values', $rows);

    //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}

?>