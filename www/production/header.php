<?php
ob_start();
session_start();
include '../connect/conn.php';

//infoları bura daxil etmək.
$infobring=$db->prepare("SELECT * FROM setting where setting_id=:id ");
$infobring->execute(array(
  'id'=>0
));
$infopull=$infobring->fetch(PDO::FETCH_ASSOC);

//İstifadəçınin məlumatlarını bura daxil etmək.
$userbring=$db->prepare("SELECT * FROM user where user_mail=:mail ");
$userbring->execute(array(
  'mail'=>$_SESSION['user_mail']
));
$say=$userbring->rowCount();
$userpull=$userbring->fetch(PDO::FETCH_ASSOC);


if ($say==0) {
  header("Location:login.php?system=ERROR");
  exit;
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $infopull['setting_title']; ?> | Admin Panel</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

 <!-- Dropzone.js -->

 <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">



<!-- Dropzone.js -->

<script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span><?php echo $userpull['user_ad'];?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>SALAM,</span>
                <h2><?php echo $infopull['setting_title']; ?> </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                <li><a href="index"><i class="fa fa-laptop"></i> Ana Səhifə <span class="label label-success pull-right"><?php echo $infopull['setting_title']; ?> </span></a></li>
                

                 

                  
                  <li><a href="mainarchivefilecategory"><i class="fa fa-file"></i>Arxiv Fayl Əsas Kateqoriya</a></li>
                  <li><a href="archivefilecategory"><i class="fa fa-file"></i>Arxiv Fayl Alt Kateqoriya</a></li>
                  <li><a href="archivefile"><i class="fa fa-file"></i>Arxiv Fayllar</a></li>
                  

               

                  
           

              

                  
                </ul>
              </div>

              
              

            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Ümumi" href="setting"> 
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" id="#" data-placement="top" title="Böyüt" >
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Sayta Bax" href="#">
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Çıxış" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $infopull['setting_title']; ?> 
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Hesab Bilgiləri</a></li>
                   
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Təhlükəsiz Çıxış</a></li>
                  </ul>
                </li>

                
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        