<?php session_start(); 
include('db.php');
 
  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="addlocation.php">

	</form>
</body>
</html>