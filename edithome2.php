<?php

include('db.php');
/*
echo $_POST['val-username'].'<br>';
echo $_POST['val-password'].'<br>';
echo $_POST['val-prename'].'<br>';
echo $_POST['val-name'].'<br>';
echo $_POST['val-lname'].'<br>';
echo $_POST['val-email'].'<br>';
*/	
//$_POST['val-username'] = 'a';

		//$userId = $_POST[ 'txtUserId' ];
		//$password = md5( $_POST[ 'txtPassword' ] );								
								
	/*	$sql = "INSERT INTO `profile` (`p_id`, `prename`, `name`, `lname`, `username`, `password`, `email`) VALUES (NULL, 
		'".$_POST['val-prename']."', 
		'".$_POST['val-name']."',  
		'".$_POST['val-lname']."', 
		'".$_POST['val-username']."', 
		'".MD5($_POST['val-password'])."',
		'".$_POST['val-email']."'
		);";					*/			


   $sql = "UPDATE `testhome` SET 
   `NAME_HOME` = '".$_POST['NAME_HOME']."', 
   `PRICE_HOME` = '".$_POST['NAME_HOME']."', 
   `City` = '".$_POST['City']."', 
   `LATI_HOME` = '".$_POST['LATI_HOME']."',  
   `LONG_HOME` = '".$_POST['LONG_HOME']."'
    
   WHERE `ID_HOME` = '".$_POST['ID_HOME']."' ;";	

   $query = mysqli_query($con,$sql);

   //$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
								
	//$num = mysqli_num_rows($query);		
								
	if($query){
			echo "<script type='text/javascript'>";
				echo "alert('SUCCESSFULLY');";
				echo "window.location='showhome.php';";
			echo "</script>";
	  }
	  else{
//ถ้าบันทึกไม่สำเร็จแสดงข้อความ Error และกระโดดกลับไปหน้าฟอร์ม
		    echo "<script type='text/javascript'>";
				echo "alert('Error!');";
				echo "window.location='addlocation.php';";
			echo "</script>";
	  }
	
	
?>
<?php
mysqli_close($con);
?>