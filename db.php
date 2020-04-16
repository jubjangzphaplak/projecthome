<?php
// Opens a connection to a MySQL server.
// $connection=mysqli_connect ("localhost", 'root', '','test');
// if (!$connection) {
//     die('Not connected : ' . mysqli_connect_error());
// }

// Sets the active MySQL database.
/*$db_selected = mysqli_select_db($connection,'accounts');
if (!$db_selected) {
    die ('Can\'t use db : ' . mysqli_error($connection));
}*/

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

// ?>



