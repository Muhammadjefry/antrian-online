<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="../assets/img/kesmas.png" sizes="16x16" />

    <title>Dasboard Admin</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" />
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet" />
    <style>
    .kard .card .card-body {
        height: 160px;
        overflow: hidden;
        transition: 0.7s;
    }

    #jmlh {
        background-color: #006c0b;
        color: #fff;
        transition: 0.7s;
    }

    #jmlh:hover {
        background-color: #06462b;
    }

    .kard .card .card-body h3 {
        position: relative;
        top: -20px;
        font-size: 4em;
        color: white;
    }

    .kard .card .card-body h2 {
        position: relative;
        top: -25px;
        font-size: 1.5em;
    }

    .kard .card .card-body h6 {
        position: relative;
        top: -10px;
        font-size: 1.5em;
    }

    .kard .card .card-body i {
        position: relative;
        z-index: 1;
        top: -118px;
        left: 170px;
        font-size: 10em;
        color: #dcdcdc;
    }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col" style="position: fixed;">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0">
                        <a href="index.php" class="site_title"><span>Dasboard Admin</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="../assets/img/kesmas.png" alt="..." class="img-circle profile_img" />
                        </div>
                        <div class="profile_info">
                            <span>Al azhar,</span>
                            <h2>Medical Center</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Daftar isi</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li>
                                    <a><i class="fa fa-edit"></i> Data Poli
                                        <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="view/umum.php">Poli Umum</a></li>
                                        <li><a href="view/gigi.php">Poli Gigi</a></li>
                                        <li> <a href="view/gizi.php">Poli Gizi</a></li>
                                        <li><a href="view/kia.php">Poli Kia</a></li>
                                        <li><a href="view/batra.php">Poli Batra</a></li>
                                        <li><a href="view/lansia.php">Poli Lansia</a></li>
                                        <li><a href="view/psikolog.php">Poli Psikologi</a></li>
                                        <li><a href="view/paru.php">Poli Paru</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav " style="position: sticky;top:0;z-index:2;">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class="navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px">
                                <a class="dropdown-item" href="../controller/logout.php"><i
                                        class="fa fa-sign-out pull-right"></i>
                                    Log Out</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title mb-3 mt-5">
                        <div class="col-12 ">
                            <h3 class="text-center">Halaman Admin</h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="row justify-content-center kard">
                        <a href="Pjmlh.php" class="col-md-4 col-sm-4 mt-4">
                            <div class="card " id="jmlh">
                                <div class="card-body">
                                    <?php 
                                  $conn = new mysqli('localhost','u4812685_irfej','Palm29RGI','u4812685_rgi_29_jefri');
                                  if($conn->connect_error){
                                      die("Connection failed: ".$conn->connect_error);
                                  }
                                        $datetoday = date('Y-m-d');
                                        $sql = mysqli_query($conn, "SELECT no_antrian FROM antrian2 WHERE tanggal= '$datetoday'") ;
                                        $jmlh_p = mysqli_num_rows($sql); 
                                        // $result = $conn->query($sql);
                                        // if ($result->num_rows > 0) {
                                        //     while ($row = $result->fetch_assoc()) {
                                        //         $jumlah_pasien = $row['qq'];
                                        //     }
                                        // }else{
                                        //     $jumlah_pasien = "0";
                                        // }
                                    ?>
                                    <h6>Jumlah Semua Pasien</h6>
                                    <h3><?php echo  $jmlh_p;  ?></h3>
                                    <h2><?php echo date('d-M-Y'); ?></h2>
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                        </a>
                        <!-- <a href="view/umum.php" class="col-md-4 col-sm-4 mt-4">
                            <div class="card ">
                                <div class="card-body">
                                    <?php 
                                  $conn = new mysqli('localhost','u4812685_irfej','Palm29RGI','u4812685_rgi_29_jefri');
                                  if($conn->connect_error){
                                      die("Connection failed: ".$conn->connect_error);
                                  }
                                    $datetoday = date('Y-m-d');
                                        $sql = "SELECT MAX(no_antrian) AS qq FROM antrian2 WHERE tanggal= '$datetoday' AND poli='umum'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $jumlah_pasien = $row['qq'];
                                            }
                                        }else{
                                            $jumlah_pasien = "0";
                                        }
                                    ?>
                                    <h6>Pasien Poli Umum</h6>
                                    <h3><?php echo $jumlah_pasien;  ?></h3>
                                    <h2><?php echo date('d-M-Y'); ?></h2>
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                        </a>
                        <a href="view/gigi.php" class="col-md-4 col-sm-4 mt-4">
                            <div class="card ">
                                <div class="card-body">
                                    <?php
                                        $conn = new mysqli('localhost','u4812685_irfej','Palm29RGI','u4812685_rgi_29_jefri');                                                                       
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        $datetoday = date('Y-m-d');
                                        $sql = "SELECT COALESCE(MAX(no_antrian), 0) AS qq FROM antrian2 
                                                RIGHT JOIN (SELECT 1 AS n) AS dummy ON tanggal = '$datetoday' AND poli = 'gigi'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $jumlah_pasien = $row['qq'];
                                            }
                                        } else {
                                            $jumlah_pasien = "0";
                                        }
                                        ?>

                                    <h6>Pasien Poli Gigi</h6>
                                    <h3><?php echo $jumlah_pasien;  ?></h3>
                                    <h2><?php echo date('d-M-Y'); ?></h2>
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                        </a>
                        <a href="view/gizi.php" class="col-md-4 col-sm-4 mt-4">
                            <div class="card ">
                                <div class="card-body">
                                    <?php 
                                  $conn = new mysqli('localhost','u4812685_irfej','Palm29RGI','u4812685_rgi_29_jefri');
                                  if($conn->connect_error){
                                      die("Connection failed: ".$conn->connect_error);
                                  }
                                    $datetoday = date('Y-m-d');
                                        $sql = "SELECT COALESCE(MAX(no_antrian), 0) AS qq FROM antrian2 
                                        RIGHT JOIN (SELECT 1 AS n) AS dummy ON tanggal = '$datetoday' AND poli='gizi'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $jumlah_pasien = $row['qq'];
                                            }
                                        }else{
                                            $jumlah_pasien = "0";
                                        }
                                    ?>
                                    <h6>Pasien Poli Gizi</h6>
                                    <h3><?php echo $jumlah_pasien;  ?></h3>
                                    <h2><?php echo date('d-M-Y'); ?></h2>
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                        </a>
                        <a href="view/kia.php" class="col-md-4 col-sm-4 mt-4">
                            <div class="card ">
                                <div class="card-body">
                                    <?php 
                                  $conn = new mysqli('localhost','u4812685_irfej','Palm29RGI','u4812685_rgi_29_jefri');
                                  if($conn->connect_error){
                                      die("Connection failed: ".$conn->connect_error);
                                  }
                                    $datetoday = date('Y-m-d');
                                        $sql = "SELECT COALESCE(MAX(no_antrian), 0) AS qq FROM antrian2 
                                        RIGHT JOIN (SELECT 1 AS n) AS dummy ON tanggal = '$datetoday' AND poli='kia'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $jumlah_pasien = $row['qq'];
                                            }
                                        }else{
                                            $jumlah_pasien = "0";
                                        }
                                    ?>
                                    <h6>Pasien Poli Kia</h6>
                                    <h3><?php echo $jumlah_pasien;  ?></h3>
                                    <h2><?php echo date('d-M-Y'); ?></h2>
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                        </a>
                        <a href="view/batra.php" class="col-md-4 col-sm-4 mt-4">
                            <div class="card ">
                                <div class="card-body">
                                    <?php 
                                  $conn = new mysqli('localhost','u4812685_irfej','Palm29RGI','u4812685_rgi_29_jefri');
                                  if($conn->connect_error){
                                      die("Connection failed: ".$conn->connect_error);
                                  }
                                    $datetoday = date('Y-m-d');
                                        $sql = "SELECT COALESCE(MAX(no_antrian), 0) AS qq FROM antrian2 
                                        RIGHT JOIN (SELECT 1 AS n) AS dummy ON tanggal = '$datetoday' AND poli='batra'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $jumlah_pasien = $row['qq'];
                                            }
                                        }else{
                                            $jumlah_pasien = "0";
                                        }
                                    ?>
                                    <h6>Pasien Poli Batra</h6>
                                    <h3><?php echo $jumlah_pasien;  ?></h3>
                                    <h2><?php echo date('d-M-Y'); ?></h2>
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                        </a>
                        <a href="view/lansia.php" class="col-md-4 col-sm-4 mt-4">
                            <div class="card ">
                                <div class="card-body">
                                    <?php 
                                  $conn = new mysqli('localhost','u4812685_irfej','Palm29RGI','u4812685_rgi_29_jefri');
                                  if($conn->connect_error){
                                      die("Connection failed: ".$conn->connect_error);
                                  }
                                    $datetoday = date('Y-m-d');
                                        $sql = "SELECT COALESCE(MAX(no_antrian), 0) AS qq FROM antrian2 
                                        RIGHT JOIN (SELECT 1 AS n) AS dummy ON tanggal = '$datetoday' AND poli='lansia'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $jumlah_pasien = $row['qq'];
                                            }
                                        }else{
                                            $jumlah_pasien = "0";
                                        }
                                    ?>
                                    <h6>Pasien Poli Lansia</h6>
                                    <h3><?php echo $jumlah_pasien;  ?></h3>
                                    <h2><?php echo date('d-M-Y'); ?></h2>
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                        </a>
                        <a href="view/psikologi.php" class="col-md-4 col-sm-4 mt-4">
                            <div class="card ">
                                <div class="card-body">
                                    <?php 
                                  $conn = new mysqli('localhost','u4812685_irfej','Palm29RGI','u4812685_rgi_29_jefri');
                                  if($conn->connect_error){
                                      die("Connection failed: ".$conn->connect_error);
                                  }
                                    $datetoday = date('Y-m-d');
                                        $sql = "SELECT COALESCE(MAX(no_antrian), 0) AS qq FROM antrian2 
                                        RIGHT JOIN (SELECT 1 AS n) AS dummy ON tanggal = '$datetoday' AND poli='psikologi'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $jumlah_pasien = $row['qq'];
                                            }
                                        }else{
                                            $jumlah_pasien = "0";
                                        }
                                    ?>
                                    <h6>Pasien Poli Psikologi</h6>
                                    <h3><?php echo $jumlah_pasien;  ?></h3>
                                    <h2><?php echo date('d-M-Y'); ?></h2>
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                        </a>
                        <a href="view/paru.php" class="col-md-4 col-sm-4 mt-4">
                            <div class="card ">
                                <div class="card-body">
                                    <?php 
                                  $conn = new mysqli('localhost','u4812685_irfej','Palm29RGI','u4812685_rgi_29_jefri');
                                  if($conn->connect_error){
                                      die("Connection failed: ".$conn->connect_error);
                                  }
                                    $datetoday = date('Y-m-d');
                                        $sql = "SELECT MAX(no_antrian) AS qq FROM antrian2 WHERE tanggal= '$datetoday' AND poli='paru'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $jumlah_pasien = $row['qq'];
                                            }
                                        }else{
                                            $jumlah_pasien = "0";
                                        }
                                    ?>
                                    <h6>Pasien Poli Paru</h6>
                                    <h3><?php echo $jumlah_pasien;  ?></h3>
                                    <h2><?php echo date('d-M-Y'); ?></h2>
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                        </a> -->

                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Copyright 2023 All reserved by :
                    <a href="../index.php">Muhammad Jefry</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>


    <?php include "includes/booking_modal.php";?>

    <script>
    // $(function() {
    //     $(".edit").click(function(e) {
    //         e.preventDefault();
    //         $("#edit").modal("show");
    //         var id = $(this).data("id");
    //         getRow(id);
    //     });

    //     $(".delete").click(function(e) {
    //         e.preventDefault();
    //         $("#delete").modal("show");
    //         var id = $(this).data("id");
    //         getRow(id);
    //     });

    //     $(".info").click(function(e) {
    //         e.preventDefault();
    //         $("#info").modal("show");
    //         var id = $(this).data("id");
    //         getRow(id);
    //     });

    //     function getRow(id) {
    //         $.ajax({
    //             type: 'POST',
    //             url: 'booking_row.php',
    //             data: {
    //                 id: id
    //             },
    //             dataType: 'json',
    //             success: function(response) {
    //                 $('.cust_id').val(response.id);
    //                 $('.customer_id').html(response.id);
    //                 $('.customer_nurut').html(response.nurut);
    //                 $('.del_customer_name').html(response.first_name + ' ' + response.last_name);
    //                 $('#edit_first_name').val(response.first_name);
    //                 $('#edit_last_name').val(response.last_name);
    //                 $('#edit_phone').val(response.phone);
    //                 $('#edit_email').val(response.email);
    //                 $('#edit_nurut').val(response.nurut);

    //                 $('.edit_first_name').html(response.first_name);
    //                 $('.edit_last_name').html(response.last_name);
    //                 $('.edit_phone').html(response.phone);
    //                 $('.edit_email').html(response.email);
    //                 $('.edit_nurut').html(response.nurut);

    //             },
    //             error: function(xhr, status, error) {
    //                 console.log("Error: " + error);
    //             }

    //         });
    //     }
    // });
    </script>

    <script>
    // $(document).ready(function() {
    //     window.setTimeout(function() {
    //         $('#alert').fadeTo(1000, 0).slideUp(1000, function() {
    //             $(this).remove();
    //         });
    //     }, 3000)
    // })
    </script>
</body>

</html>