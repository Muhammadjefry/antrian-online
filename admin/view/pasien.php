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
    <link rel="icon" type="image/png" href="../../assets/img/kesmas.png" sizes="16x16" />

    <title>Dasboard Admin</title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet" />
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

    <!-- bootstrap-progressbar -->
    <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" />
    <!-- JQVMap -->
    <link href="../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet" />
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0">
                        <a href="index.php" class="site_title"><span>Dasboard Admin</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="../../assets/img/kesmas.png" alt="..." class="img-circle profile_img" />
                        </div>
                        <div class="profile_info">
                            <span>Al Azhar,</span>
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
                                    <a href="../index.php"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li>
                                    <a><i class="fa fa-edit"></i> Data Poli
                                        <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="umum.php">Poli Umum</a></li>
                                        <li><a href="gigi.php">Poli Gigi</a></li>
                                        <li> <a href="gizi.php">Poli Gizi</a></li>
                                        <li><a href="kia.php">Poli Kia</a></li>
                                        <li><a href="batra.php">Poli Batra</a></li>
                                        <li><a href="lansia.php">Poli Lansia</a></li>
                                        <li><a href="psikolog.php">Poli Psikolog</a></li>
                                        <li><a href="paru.php">Poli Paru</a></li>
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a><i class="fa fa-user-md" aria-hidden="true"></i>Doctors
                                        <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="doctor.php">Doctor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-bug"></i> Stok Obat
                                        <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="obat.php">Obat</a></li>
                                        <li><a href="jumlah.php">Jumlah Obat</a></li>
                                        <li><a href="kedeluarsa.php">Obat Kedeluarsa</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class="navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px">
                                <a class="dropdown-item" href="../../controller/logout.php"><i
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
                    <div class="page-title">
                        <div class="title_left">
                            <h3>List Of Record</h3>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <?php 
                    if(isset($_SESSION['error'])){
                        echo " 
                        <div class='alert alert-danger alert-dismissible' id='alert' style='background: green;border-radius:5px;padding:10px;color:#fff;'>
                         <button class='close' type='button' data-dismiss='alert' aria-hidden='true'>&times;</button>
                          <h4><i class='icon fa fa-warning'></i>Error</h4>".$_SESSION['error'].";
                        </div>
                        ";
                        unset($_SESSION['error']);
                    }
                    if(isset($_SESSION['success'])){
                        echo " 
                        <div class='alert alert-success alert-dismissible' id='alert' style='background: green;border-radius:5px;padding:10px;color:#fff;'>
                         <button class='close' type='button' data-dismiss='alert' aria-hidden='true'>&times;</button>
                          <h4><i class='icon fa fa-check'></i>Success</h4>".$_SESSION['success'].";
                        </div>
                        ";
                        unset($_SESSION['success']);
                    }
                     ?>
                            <div class="x_panel" style="box-shadow:  10px 10px 20px #969696,
             -10px -10px 20px #ffffff;">
                                <div class="x_title">
                                    <h2>List Of Booked</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">

                                                <table id="datatable-responsive"
                                                    class="table table-bordered table-striped dt-responsive nowrap"
                                                    cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>Tanggal Layanan</th>
                                                            <th>Name</th>
                                                            <th>Poli</th>
                                                            <th>No Antrian</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        require_once"../includes/conn.php";
                                                        $dateToday = date('Y-m-d');
                                                        $sql = "SELECT * FROM antrian2 WHERE tanggal='$dateToday'";
                                                        $query = $conn->query($sql);
                                                        
                                                        while ($row = $query->fetch_assoc()) { ?>
                                                        <tr class="text-center">
                                                            <td><?php echo $row['tanggal']; ?></td>
                                                            <td><?php echo $row['login_id']; ?></td>
                                                            <td><?php echo $row['poli']; ?></td>
                                                            <td><?php echo $row['no_antrian']; ?></td>
                                                            <td>
                                                                <button data-id='<?php echo $row['id']; ?>'
                                                                    class="btn btn-success btn-sm success"><i
                                                                        class="fa fa-check me-3"></i>Hadir</button>
                                                                <button class="btn btn-danger btn-sm failed"><i
                                                                        class="fa fa-close me-3"></i>Tidak
                                                                    Hadir</button>
                                                            </td>
                                                        </tr>
                                                        <?php    
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../../vendors/Flot/jquery.flot.js"></script>
    <script src="../../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>


    <?php include "../includes/booking_modal.php";?>

    <script>
    $(function() {
        $(".edit").click(function(e) {
            e.preventDefault();
            $("#edit").modal("show");
            var id = $(this).data("id");
            getRow(id);
        });

        $(".delete").click(function(e) {
            e.preventDefault();
            $("#delete").modal("show");
            var id = $(this).data("id");
            getRow(id);
        });

        $(".info").click(function(e) {
            e.preventDefault();
            $("#info").modal("show");
            var id = $(this).data("id");
            getRow(id);


        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: '../modal/booking_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('.cust_id').val(response.id);
                    $('.customer_id').html(response.id);
                    $('.customer_no_antrian').html(response.no_antrian);
                    $('.del_customer_name').html(response.nama);
                    $('.del_customer_nik').html(response.nik);
                    $('.del_customer_poli').html(response.poli);
                    $('.del_customer_username').html(response.username);
                    $('.del_customer_phone').html(response.phone);
                    $('#edit_nama').val(response.nama);
                    $('#edit_phone').val(response.phone);
                    $('#edit_username').val(response.username);
                    $('#edit_no_antrian').val(response.no_antrian);
                    $('#edit_nik').val(response.nik);
                    $('#edit_poli').val(response.poli);


                    $('.edit_nama').html(response.nama);
                    $('.edit_phone').html(response.phone);
                    $('.edit_username').html(response.username);
                    $('.edit_no_antrian').html(response.no_antrian);
                    $('.edit_nik').html(response.nik);
                    $('.edit_poli').html(response.poli);

                },
            });
        }
    });
    </script>

    <script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $('#alert').fadeTo(1000, 0).slideUp(1000, function() {
                $(this).remove();
            });
        }, 3000)
    })
    </script>
</body>

</html>