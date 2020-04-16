<!DOCTYPE html>
<html>
<head>
    <title> Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />
<link rel="stylesheet" href="../src/leaflet-search.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
        integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
        crossorigin="">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
        integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
        crossorigin=""></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>

</head>
<body>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Map</title>

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
        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
 /* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

   
table {
            border: 0px solid black;
            border-collapse: collapse;
            color: #579efa;
            width: 100%;
            height: 100%;
            font-size: 18px;
        }

        th {
            padding-top: 5px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #2f01fa;
            color: white;

        }


        td {
            border: 0px solid black;
            border-collapse: collapse;
            color: #000000;
            font-size: 16px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
   
    /* #map {
        height: 100%;
    } */
    
    input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

       
        #map {
      
        height:550px ;
        width:868px; 
        left: 10px; 
        }

        .geocoder {
            position:absolute;
            left: 100px; 
            top:720px;
            bottom :500px;
            width:200px; 
        }
        .marker-pin {
  width: 30px;
  height: 30px;
  border-radius: 50% 50% 50% 0;
  background: #c30b82;
  position: absolute;
  transform: rotate(-45deg);
  left: 50%;
  top: 50%;
  margin: -15px 0 0 -15px;
}

.marker-pin::after {
    content: '';
    width: 24px;
    height: 24px;
    margin: 3px 0 0 3px;
    background: #fff;
    position: absolute;
    border-radius: 50%;
 }

.custom-div-icon i {
   position: absolute;
   width: 22px;
   font-size: 22px;
   left: 0;
   right: 0;
   margin: 10px auto;
   text-align: center;
}

.custom-div-icon i.awesome {
   margin: 12px auto;
   font-size: 17px;
}
table {
            border: 0px solid black;
            border-collapse: collapse;
            color: #579efa;
            width: 100%;
            height: 100%;
            font-size: 18px;
        }

        th {
            padding-top: 5px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #2f01fa;
            color: white;

        }


        td {
            border: 0px solid black;
            border-collapse: collapse;
            color: #000000;
            font-size: 16px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .s01 {
         

            background: url("../images/Search_001.png");
            background-size: cover;
            background-position: center center;
            padding: 10px;
        }

        .s01 form {
            width: 100%;
            max-width: 1290px;
        }

        .s01 form legend {
            font-size: 72px;
            line-height: 1;
            color: #fff;
            margin-bottom: 60px;
        }

        .s01 form .inner-form {
            background: rgba(0, 0, 0, 0.5);
            padding: 50px 47px;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-align: center;
            align-items: center;
        }

        .s01 form .inner-form .input-field {
            margin-right: 30px;
            height: 68px;
        }

        .s01 form .inner-form .input-field input {
            height: 100%;
            background: #fff;
            border-radius: .5px;
            border: 0;
            display: block;
            width: 100%;
            padding: 10px 32px;
            font-size: 20px;
        }

        .s01 form .inner-form .input-field input.placeholder {
            color: #9a9a9a;
            font-size: 20px;
        }

        .s01 form .inner-form .input-field input:-moz-placeholder {
            color: #9a9a9a;
            font-size: 20px;
        }

        .s01 form .inner-form .input-field input::-webkit-input-placeholder {
            color: #9a9a9a;
            font-size: 20px;
        }

        .s01 form .inner-form .input-field input:hover,
        .s01 form .inner-form .input-field input:focus {
            box-shadow: none;
            outline: 0;
        }

        .s01 form .inner-form .input-field.first-wrap {
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .s01 form .inner-form .input-field.second-wrap {
            width: 32.77%;
            min-width: 180px;
        }

        .s01 form .inner-form .input-field.third-wrap {
            width: 180px;
            margin-right: 0;
        }

        .s01 form .inner-form .input-field.third-wrap .btn-search {
            height: 100%;
            width: 100%;
            background: #4272d7;
            white-space: nowrap;
            border-radius: .5px;
            font-size: 20px;
            color: #fff;
            transition: all .2s ease-out, color .2s ease-out;
            border: 0;
            cursor: pointer;
        }

        .s01 form .inner-form .input-field.third-wrap .btn-search:hover {
            background: #2d62d3;
        }

        @media screen and (max-width: 992px) {
            .s01 form legend {
                font-size: 50px;
                text-align: center;
                margin-bottom: 50px;
            }

            .s01 form .inner-form {
                padding: 30px 35px;
            }

            .s01 form .inner-form .input-field {
                height: 50px;
            }
        }

        @media screen and (max-width: 767px) {
            .s01 form legend {
                font-size: 40px;
                margin-bottom: 40px;
            }

            .s01 form .inner-form {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding: 20px;
            }

            .s01 form .inner-form .input-field {
                margin-right: 0;
            }

            .s01 form .inner-form .input-field input {
                padding: 5px 15px;
                font-size: 16px;
            }

            .s01 form .inner-form .input-field.first-wrap {
                width: 100%;
                margin-bottom: 20px;
            }

            .s01 form .inner-form .input-field.second-wrap {
                width: calc(50% - 10px);
                min-width: auto;
            }

            .s01 form .inner-form .input-field.third-wrap {
                width: calc(50% - 10px);
            }

            .s01 form .inner-form .input-field.third-wrap .btn-search {
                font-size: 16px;
            }
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
                    <img src=" images/logohome.jpg" >
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
                                    <a href="user-map2.php">ค้นหาบ้านของคุณ</a>
                                </li>
                                <!-- <li>
                                    <a href="addlocation.php">เพิ่มข้อมูลบ้าน</a>
                                </li> -->
                                <!-- <li>
                                    <a href="showhome.php">ข้อมูลบ้านทั้งหมด</a>
                                </li> -->
                                <li>
                                    <a href="u-homedetail.php">ดูบ้านทั้งหมด</a>
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
                                                        <a href="#">user</a>
                                                    </h5>
                                                    <span class="email">user2demo@example.com</span>
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
                                                <a href="#">
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
                                <div class="au-card m-b-60">
                              
           
            






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

