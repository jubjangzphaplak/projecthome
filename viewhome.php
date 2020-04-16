<?php
include ('db.php');
$sql = "SELECT * FROM testhome where ID_HOME = '".$_GET["ID_HOME"]."'";

$query = mysqli_query($con,$sql);
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Add Home</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<style>
    body {
        font-family: 'Prompt', sans-serif;
    }



</style>
<style>
    /* Always set the map height explicitly to define the size of the div
    * element that contains the map. */
    #map {
      height: 400px;
      width:auto;
  }
  /* Optional: Makes the sample page fill the window. */
  html, body {
      height: 100%;
      margin: 0;
      padding: 0;
  }
</style>

<body class="animsition">

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href=""></a>
                                    </li>
                                    <li>
                                        <a href=""></a>
                                    </li>
                                    <li>
                                        <a href=""></a>
                                    </li>
                                    <li>
                                        <a href=""></a>
                                    </li>
                                    <li>
                                        <a href=""></a>
                                    </li>
                                    <li>
                                        <a href=""></a>
                                    </li>
                                    <li>
                                        <a href=""></a>
                                    </li>
                                </ul>
                            </li>



                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="images/logohome.jpg " >
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-home"></i>บ้านราคาดี.com</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="user-map.php">ค้นหาบ้านของคุณ</a>
                                        </li>
                                       
                                       
                                        <li>
                                            <a href=""></a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>ประกาศ</a>
                                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="u-homedetail.php">ประกาศขาย/เช่า</a>
                                    </li>
                                    
                                 
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="usercontent.php">
                                    <i class="fas fa-comments"></i>บทความตกแต่งบ้าน</a>
                                   
                                 
                                </ul>
                            </li>




                                </nav>
                            </div>
                        </aside>
                        <!-- END MENU SIDEBAR-->

                        <!-- PAGE CONTAINER-->
                        <div class="page-container">
                            <!-- HEADER DESKTOP-->
                            <header class="header-desktop">
                                <div class="section__content section__content--p30">
                                    <div class="container-fluid">
                                        <div class="header-wrap">
                                            <form class="form-header" action="" method="POST">
                                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                                <button class="au-btn--submit" type="submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </form>
                                            <div class="header-button">
                                                <div class="noti-wrap">

                                                </div>
                                                <div class="account-wrap">
                                                    <div class="account-item clearfix js-item-menu">
                                                        <div class="image">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Doe" />
                                                        </div>
                                                        <div class="content">
                                                            <a class="js-acc-btn" href="#"> User</a>
                                                        </div>
                                                        <div class="account-dropdown js-dropdown">
                                                            <div class="info clearfix">
                                                                <div class="image">
                                                                    <a href="#">
                                                                        <img src="images/icon/avatar-02.jpg" alt="John Doe" />
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <h5 class="name">
                                                                        <a href="#">Admin</a>
                                                                    </h5>
                                                                    <span class="email">home2demo@example.com</span>
                                                                </div>
                                                            </div>
                                                            <div class="account-dropdown__body">
                                                                <div class="account-dropdown__item">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                                    </div>
                                                                    <div class="account-dropdown__item">
                                                                        <a href="#">
                                                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                                                        </div>
                                                                        <div class="account-dropdown__item">
                                                                            <a href="#">
                                                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="account-dropdown__footer">
                                                                            <a href="logout.php">
                                                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                            <!-- END HEADER DESKTOP-->

                                            <!-- MAIN CONTENT-->
                                            <div class="main-content">
                                                <div class="section__content section__content--p30">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="au-card m-b-30">
                                                                    <div class="container">
                                                                        <div class="container">
                                                                            <form action="edithome2.php" method="post">




                                                                                <div class="container">

                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="card">
                                                                                                <div class="card-body">
                                                                                                    <div class="form-validation">
                                                                                                        <form class="form-valide" action="edithome2.php" method="post">
                                                                                                           <input type="hidden" name="lat" id="lat" value="<?php echo $result["LATI_HOME"];?>">
                                                                                                           <input type="hidden" name="lon" id="lon" value="<?php echo $result["LONG_HOME"];?>">

                                                                                                           <div class="form-group row">
                                                                                                            <label class="col-lg-4 col-form-label" for="PIC_HOME"> <?php echo '<img width= "450" height ="500" src="images/'.$result['PIC_HOME'].'">'; ?></label>

                                                                                                        </div>
                                                                                                          

                                                                                                           <div class="form-group row">
                                                                                                            <label class="col-lg-4 col-form-label" for="NAME_HOME"><b>ชื่อบ้าน : <?php echo $result["NAME_HOME"];?></label>

                                                                                                        </div>


                                                                                                        <div class="form-group row">
                                                                                                            <label class="col-lg-4 col-form-label" for="PRICE_HOME"><b>ราคา : <?php echo $result["PRICE_HOME"];?></label>

                                                                                                        </div>

                                                                                                        <div class="form-group row">
                                                                                                            <label class="col-lg-4 col-form-label" for="City"><b>พิกัด : <?php echo $result["City"];?></label>

                                                                                                        </div>
                                                                                                        
                                                                                                        <!-- <div class="form-group row">
                                                                                                            <label class="col-lg-8 col-form-label" for="detail"><b>รายละเอียด : <?php echo $result["detail"];?></label>

                                                                                                        </div> -->

                                                                                                        <div id="map"></div>


                                                                                                        

                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-lg-8 ml-auto">
  <br>
  <a href=".php"><button type="button" class="btn btn-success" >ติดต่อผู้ขาย</button></a>&nbsp; <a href="u-homedetail.php"><button type="button" class="btn btn-warning" >ย้อนกลับ</button></a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>



                                                                                <script>
                                                                                    var map;
                                                                                    var panorama;


                                                                                    function initMap() {
                                                                                        var la = $("#lat").val();
                                                                                        var ln = $("#lon").val();
                                                                                        var astorPlace = {lat: parseFloat(la), lng: parseFloat(ln)};

        // Set up the map
        var map = new google.maps.Map(document.getElementById('map'), {
          center: astorPlace,
          zoom: 10,
          streetViewControl: false
      });

        
            //var b = parseFloat("10.00");
            //var b = parseFloat("10.00");
            var busMarker = new google.maps.Marker({

              position: {lat: parseFloat(la) , lng: parseFloat(ln)},
              map: map,
              icon: 'https://chart.apis.google.com/chart?chst=d_map_pin_icon&chld=home|FFFF00',
              title: 'Bus Stop'
          });



        // We get the map's default panorama and set up some defaults.
        // Note that we don't yet set it visible.
        panorama = map.getStreetView();
        panorama.setPosition(astorPlace);
        panorama.setPov(/** @type {google.maps.StreetViewPov} */({
          heading: 265,
          pitch: 0
      }));

    }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGJZYkTiKEVDu5DxA57Ri3og_70N4WyDI&callback=initMap">
</script>
<!-- End PAge Content -->
</div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
