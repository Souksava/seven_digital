<?php
//    session_start();
//     if($_SESSION['ses_id'] == ''){
//         echo"<meta http-equiv='refresh' content='1;URL=../index.html'>";        
//     }
//     else if($_SESSION['auther_id'] != 2){
//         echo"<meta http-equiv='refresh' content='1;URL=../Check/logout.php'>";
//     }
//     else{

//     }
       require ''.$path.'ConnectDB/connectDB.php';
      ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?php echo $path; ?>image/logo.png">
    <title><?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tcususdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo $path ?>plugins/tcususdominus-bootstrap-4/css/tcususdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $path ?>dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo $path ?>dist/css/alt/style.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="<?php echo $path ?>dist/js/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light font14">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link"><?php echo $title; ?></a>
                </li>
            </ul>

            <?php 
            // input text search in header for main data
                    if ($title == "ຂໍ້ມູນພະນັກງານ"){
                    echo '<form action="employee" class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar" name="search" id="search" type="search" placeholder="ຄົ້ນຫາ" aria-label="Search">
                      <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>';
                    }
                    else{ 
                      echo"";
                    }

                    if ($title == "ຂໍ້ມູນລູກຄ້າ"){
                        echo '<form class="form-inline ml-3">
                        <div class="input-group input-group-sm">
                          <input class="form-control form-control-navbar" name="search" id="search" type="search" placeholder="ຄົ້ນຫາ" aria-label="Search">
                          <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </form>';
                        }
                        else{ 
                          echo"";
                        }

                        if ($title == "ຂໍ້ມູນຜູ້ສະໜອງ"){
                            echo '<form action="supplier" id="formSearch" method="POST" class="form-inline ml-3">
                            <div class="input-group input-group-sm">
                              <input class="form-control form-control-navbar" type="text" name="search" id="search" placeholder="ຄົ້ນຫາ" aria-label="Search">
                              <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                  <i class="fas fa-search"></i>
                                </button>
                              </div>
                            </div>
                          </form>';
                            }
                            else{ 
                              echo"";
                            }


                        if ($title == "ຂໍ້ມູນສິນຄ້າ"){
                                    echo '<form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">
                                      <input class="form-control form-control-navbar" type="search" placeholder="ຄົ້ນຫາ" aria-label="Search">
                                      <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                          <i class="fas fa-search"></i>
                                        </button>
                                      </div>
                                    </div>
                                  </form>';
                                    }
                                    else{ 
                                      echo"";
                                    }
        
                                        if ($title == "ສ້າງຟອມ"){
                                            echo '<form class="form-inline ml-3">
                                            <div class="input-group input-group-sm">
                                              <input class="form-control form-control-navbar" type="search" placeholder="ຄົ້ນຫາ" aria-label="Search">
                                              <div class="input-group-append">
                                                <button class="btn btn-navbar" type="submit">
                                                  <i class="fas fa-search"></i>
                                                </button>
                                              </div>
                                            </div>
                                          </form>
                                          <a href="#" class="nav-link">ກອດສອບສິນຄ້າ</a>
                                          ';
                                            }
                                            else{ 
                                              echo"";
                                            }   
                                            
                                            if ($title == "ເບີກສິນຄ້າ"){
                                                echo '<form class="form-inline ml-3">
                                                <div class="input-group input-group-sm">
                                                  <input class="form-control form-control-navbar" type="search" placeholder="ຄົ້ນຫາ" aria-label="Search">
                                                  <div class="input-group-append">
                                                    <button class="btn btn-navbar" type="submit">
                                                      <i class="fas fa-search"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                              </form>
                                              ';
                                                }
                                                else{ 
                                                  echo"";
                                                } 


    ?>

            <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="ຄົ້ນຫາ" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 font14">
            <!-- Brand Logo -->
            <a href="<?php echo $links ?>Main" class="brand-link">
                <img src="<?php echo $path ?>image/logo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Seven Digital</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <?php
            if($_SESSION['img_path'] == ''){
              ?>
              <img src="<?php echo $path ?>image/image.jpeg" class="img-circle elevation-2" alt="User Image">
              <?php

            }
            else{
              ?>
                   <img src="<?php echo $path ?>image/<?php echo $_SESSION['img_path'] ?>" class="img-circle elevation-2" alt="User Image">
              <?php
            }
          ?> -->

                        <img src="<?php echo $path ?>image/image.jpeg" class="img-circle elevation-2" alt="User Image">

                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php // echo $_SESSION['emp_name'] ?>Seven_User</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    ຈັດການຂໍ້ມູນຫຼັກ
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Management/auther" class="nav-link">
                                        <i class="fas fa-network-wired nav-icon"></i>
                                        <p>ຂໍ້ມູນຕຳແໜ່ງ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Management/employee" class="nav-link">
                                        <i class="far fa fa-user nav-icon"></i>
                                        <p>ຂໍ້ມູນພະນັງານ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Management/supplier" class="nav-link">
                                        <i class="far fa fa-user nav-icon"></i>
                                        <p>ຂໍ້ມູນຜູ້ສະໜອງ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Management/customer-status" class="nav-link">
                                        <i class="fas fa-stamp nav-icon"></i>
                                        <p>ຂໍ້ມູນສະຖານະລູກຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Management/customer" class="nav-link">
                                        <i class="far fa fa-user nav-icon"></i>
                                        <p>ຂໍ້ມູນລູກຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Management/category" class="nav-link">
                                        <i class="far fa fa-cube nav-icon"></i>
                                        <p>ຂໍ້ມູນປະເພດສິນຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Management/unit" class="nav-link">
                                        <i class="far fa fa-cube nav-icon"></i>
                                        <p>ຂໍ້ມູນຫົວໜ່ວຍສິນຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Management/products" class="nav-link">
                                        <i class="fas fa-boxes nav-icon"></i>
                                        <p>ຂໍ້ມູນສິນຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Management/product-address" class="nav-link">
                                        <i class="fas fa-boxes nav-icon"></i>
                                        <p>ຂໍ້ມູນຂໍ້ມູນສາງ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Management/brand" class="nav-link">
                                        <i class="fas fa-boxes nav-icon"></i>
                                        <p>ຂໍ້ມູນຍີ່ຫໍ້</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Management/rate" class="nav-link">
                                        <i class="fas fa-boxes nav-icon"></i>
                                        <p>ຂໍ້ມູນເລດເງີນ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo $links ?>Import/import" class="nav-link">
                                <i class="nav-icon fa fa-truck"></i>
                                <p>
                                    ນຳເຂົ້າສິນຄ້າ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <i class="fab fa-product-hunt nav-icon"></i>
                                <p>
                                    ສ້າງຟອມ ແລະ ເບີກຈ່າຍສິນຄ້າ
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Form/form" class="nav-link">
                                        <i class="far fa-file-alt nav-icon"></i>
                                        <p>ສ້າງໃບສະເໜີເບີກສິນຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Form/accept" class="nav-link">
                                        <i class="fas fa-vote-yea nav-icon"></i>
                                        <p>ອະນຸມັດຟອມເບີກສິນຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Form/distribute" class="nav-link">
                                        <i class="fas fa-boxes nav-icon"></i>
                                        <p>ເບີກຈ່າຍສິນຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Form/product-putback" class="nav-link">
                                        <i class="fas fa-undo nav-icon"></i>
                                        <p>ສິນຄ້າເບີກແລ້ວນຳກັບເຂົ້າສາງຄືນ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $links ?>Check/check-stock" class="nav-link">
                                <i class="fas fa fa-cubes nav-icon"></i>
                                <p>
                                    ນັບສະຕ໋ອກສິນຄ້າ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $links ?>Spare/spare-part" class="nav-link">
                                <i class="fas fa-undo nav-icon"></i>
                                <p>
                                    ປ່ຽນອາໄຫຼ່
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    ລາຍງານ
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Report/report-employee" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານຂໍ້ມູນພະນັກງານ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Report/report-customer" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານຂໍ້ມູນລູກຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Report/report-supplier" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານຂໍ້ມູນຜູ້ສະໜອງ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Report/report-product" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານຂໍ້ມູນສິນຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Report/report-stock" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານຂໍ້ມູນສະຕ໋ອກສິນຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Report/report-check-stock" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານຂໍ້ມູນການນັບສະຕ໋ອກ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Report/report-warehouse" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານຂໍ້ມູນສາງເກັບຮັກສາ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Report/report-distribute" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານຂໍ້ມູນການເບີກຈ່າຍສິນຄ້າ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $links ?>Report/report-product-putback" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານສິນຄ້າເບີກແລ້ວເກັບເຂົ້າສາງ</p>
                                    </a>
                                </li>
                            </ul>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    ອອກຈາກລະບົບ
                                </p>
                            </a>
                        </li>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <form action="<?php echo $path ?>Check/Logout.php" method="POST" id="formLogout">
            <div class="modal fade font14" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" align="center">
                            ທ່ານຕ້ອງການອອກຈາກລະບົບ ຫຼື ບໍ່ ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-dismiss="modal">ຍົກເລີກ</button>
                            <button type="submit" name="btnLogout" class="btn btn-outline-danger">ອອກຈາກລະບົບ</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="main-footer">