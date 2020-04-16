<?php

$con = mysqli_connect("localhost","root","","location");
$con->set_charset("utf8");

if($_REQUEST["load"]=="AllHome"){
	
	$result = $con->query("select * from testhome");

	$array = array();
	while($row = $result->fetch_object()){
		
		array_push($array, $row);
	}
	echo json_encode($array);
}

if($_REQUEST["load"]=="dataHome"){
	
	$sql = "select * from testhome where NAME_HOME = '{$_GET["name_home"]}' AND City = '{$_GET["loc"]}' ";

	$result = $con->query($sql);

	$array = array();
	while($row = $result->fetch_object()){
		
		array_push($array, $row);
	}
	echo json_encode($array);
}

?>



