<?php
session_start();

if ((!isset($_SESSION['username']) != "")) {
	header('Location: login.php');
	exit;
}


include ('connect_db.php');

$sql = "SELECT * FROM member where member_id = '".$_GET["member_id"]."' ";
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    <title>JohnF Library</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">


             <!-- header header  -->
        <?php
			include('header.php')
		?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <?php
			include('left_siderbar.php')
		?>        
        <!-- End Left Sidebar  -->

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">แก้ไขผู้ใช้</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="sql_update.php" method="post">
                                       
                                        

                                       						
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-name">ชื้อผู้ใช้ <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-name" name="val-name"  placeholder="Enter name" value="<?php echo $result["fname"];?>">
                                            </div>
                                        </div>
										
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-lname">นามสกุล <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-lname" name="val-lname"  placeholder="Enter last name" value="<?php echo $result["lname"];?>">
                                            </div>
                                        </div>	
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">ที่อยู่ <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-address" name="val-address" placeholder="Your valid email.." value="<?php echo $result["address"];?>">
                                            </div>
                                        </div>

										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="..and confirm it!" value="<?php echo $result["password"];?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
												<input type="hidden" name="member_id" value="<?php echo $result["member_id"];?>">
                                                <button type="submit" class="btn btn-primary">ยืนยัน</button>
												<a href="index.php"><button type="button" class="btn btn-warning" >ยกเลิก</button></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 Welcome to The JohnF Library . Template designed by <a href="https://colorlib.com">JohnF Library</a></footer>            <!-- End footer -->
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <!-- Form validation -->
    <script src="js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="js/lib/form-validation/jquery.validate-init.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>



-----------------
<?php
session_start();

include('connect_db.php');
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

   $sql = "UPDATE `member` SET 
   `fname` = '".$_POST['val-name']."', 
   `lname` = '".$_POST['val-lname']."', 
   `address` = '".$_POST['val-address']."',  
   `password` = '".MD5($_POST['val-password'])."' 
   WHERE `member_id` = '".$_POST['member_id']."' ;";	

   $query = mysqli_query($conn,$sql);

   //$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
								
	//$num = mysqli_num_rows($query);		
								
	if($query){
			echo "<script type='text/javascript'>";
				echo "alert('SUCCESSFULLY');";
				echo "window.location='index.php';";
			echo "</script>";
	  }
	  else{
//ถ้าบันทึกไม่สำเร็จแสดงข้อความ Error และกระโดดกลับไปหน้าฟอร์ม
		    echo "<script type='text/javascript'>";
				echo "alert('Error!');";
				echo "window.location='add_member.php';";
			echo "</script>";
	  }
	
	
?>
<?php
mysqli_close($conn);
?>