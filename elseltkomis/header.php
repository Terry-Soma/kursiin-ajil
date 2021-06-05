<?php
session_start();
include('dbconnection.php');
include("checklogin.php");

check_login();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Комис вэб </title>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="admin/assets/css/style.css" rel="stylesheet">
    <link href="admin/assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

</head>
<?php 

?>
<body>
    <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
             <a href="Welcome.php" class="logo"><b>Dashboard</b></a> 
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                  <li><a class="logout" href="#"> <?= $_SESSION['tomilogch_Ner'];?></a></li>
                    <li><a class="logout" href="logout.php">Гарах</a></li>
                </ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="#"><img src="admin/assets/img/logo.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?= $_SESSION['mail'];?></h5>

                  <li class="mt">
                      <a href="Welcome.php" >
                          <i class="fa fa-users"></i>
                          <span>Элсэгчид</span>
                      </a>
                   
                  </li>

                  <li class="sub-menu">
                      <a href="create.php" >
                          <i class="fa fa-user"></i>
                          <span>Элсэгч нэмэх</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="excel.php" >
                          <i class="fa fa-upload"></i>
                          <span>Excel файл оруулах</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="exceldownload.php" >
                          <i class="fa fa-download"></i>
                          <span>Excel файл татах</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="tomilgoo.php" >
                          <i class="fa fa-plus"></i>
                          <span>Томилолт олгох</span>
                      </a>
                  </li>
              </ul>
          </div>
      </aside>
      </section>
