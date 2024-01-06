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

    <title>Dasboard Poli <?php echo $_SESSION['level']; ?></title>

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
            <div class="col-md-3 left_col" style="position:fixed;">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0">
                        <a href="index.php" class="site_title"><span>Dasboard Poli
                                <?php echo $_SESSION['level']; ?></span></a>
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
                                    <a href="../poli/poli.php"><i class="fa fa-home"></i> Home</a>
                                </li>

                                <li>
                                    <a><i class="fa fa-male"></i>Daftar Pasien
                                        <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="pasien.php">Pasien Tertangani</a>
                                        </li>
                                        <li>
                                            <a href="pasienT.php">Pasien Tidak Tertangani</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->


                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav" style="position: sticky;top:0;z-index:2;">
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
                            <h3 class="">Halaman
                                Poli <?php echo $_SESSION['level']; ?>
                            </h3>
                        </div>

                        <div class="title_right mt-5">
                            <div class="text-right mt-3 mb-3">
                                <a href="#" data-id='<?php echo $row['id']; ?>'
                                    class="btn btn-danger btn-sm me-5 tambah2">
                                    <i class="fa fa-close" style="margin-right: 5px;"></i>
                                    Tidak tertangani</a>
                                <a href="#" data-id=' <?php echo $row['id']; ?>'
                                    class="btn btn-primary btn-sm tambah me-5">
                                    <i class="fa fa-plus" style="margin-right: 5px;"></i>
                                    Tambah Riwayat</a>
                            </div>

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
                                    <h2>Patient Health Record</h2>
                                    <!-- <ul class="nav navbar-right panel_toolbox">
                                        <li>
                                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href="#" class="dropdown-item">Setting 1</a>
                                                <a href="#" class="dropdown-item">Setting 2</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="" class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul> -->
                                    <div class="clearfix"></div>
                                </div>
                                <div class="content">
                                    <div class="row col-sm-8">
                                        <div class="col-sm-12">
                                            <div
                                                class="card-box table table-bordered table-striped dt-responsive nowrap">
                                                <table id="datatable-responsive" class=" dt-responsive nowrap"
                                                    cellspacing="0" width="100%">
                                                    <thead>
                                                        <?php 
                                                        require_once"../includes/conn.php";
                                                        $name = $_GET['name'];
                                                        $sql = "SELECT * FROM pasien WHERE name='$name'";
                                                        $sql = "SELECT * FROM pasien LEFT JOIN login ON pasien.login_id = login.name WHERE pasien.login_id = '$name' ORDER BY pasien.tanggal DESC";
                                                        $query = $conn->query($sql);
                                                        if($query->num_rows > 0){   
                                                        while($row = $query->fetch_assoc()){
                                                        $p_nama = $row['name'];
                                                        $p_date = $row['date'];
                                                        $p_gender = $row['gender'];
                                                        $p_tlp = $row['tlp'];
                                                            
                                                        ?>
                                                        <tr class="text-center">
                                                            <th class="text-primary">
                                                                Riwayat Kesehatan
                                                            </th>
                                                            <th class="text-primary ">
                                                                Penggunaan Obat
                                                            </th>
                                                        </tr>
                                                        <tr class="text-left">
                                                            <th>Tanggal
                                                                Kunjungan :
                                                                <?php echo $row['tanggal']; ?>
                                                            </th>
                                                            <th>Obat :
                                                                <?php echo $row['obat']; ?>
                                                            </th>
                                                        </tr>
                                                        <tr class="text-left">
                                                            <th>Keluhan :
                                                                <?php echo $row['keluhan']; ?>
                                                            </th>
                                                            <th>Dosis :
                                                                <?php echo $row['dosis']; ?>
                                                            </th>
                                                        </tr>
                                                        <tr class="text-left">
                                                            <th>Diagnosis
                                                                :
                                                                <?php echo $row['diagnosis']; ?>
                                                            </th>
                                                            <th>Frekuensi
                                                                :
                                                                <?php echo $row['frekuensi']; ?>
                                                            </th>
                                                        </tr>
                                                        <tr class="text-left">
                                                            <th>Tindakan
                                                                :
                                                                <?php echo $row['tindakan']; ?>
                                                            </th>
                                                            <th>Poli :
                                                                <?php echo $row['poli']; ?>
                                                            </th>
                                                        </tr>
                                                        <tr class="mb-5">
                                                            <th colspan="4 " style="border: none;">
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <?php    
                                                        }
                                                    } else {
                                                            // Tampilkan pesan jika tidak ada data yang ditemukan
                                                            echo '<tr><td colspan="7" class="text-center pt-5 pb-5">
                                                            Belum ada riwayat kesehatan</td></tr>';
                                                        } 
                                                    
                                                        ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <h2>Nama : <?php echo isset($p_nama) ? $p_nama : ''; ?></h2>
                                        <h2>Tanggal Lahir : <?php echo isset($p_date) ? $p_date : ''; ?></h2>
                                        <h2>Jenis Kelamin : <?php echo isset($p_gender) ? $p_gender : ''; ?></h2>
                                        <h2>Telephone : <?php echo isset($p_tlp) ? $p_tlp : ''; ?></h2>
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
        // $(".edit2").click(function(e) {
        //     e.preventDefault();
        //     $("#edit2").modal("show");
        //     var id = $(this).data("id");
        //     getRow(id);
        // });

        // $(".delete2").click(function(e) {
        //     e.preventDefault();
        //     $("#delete2").modal("show");
        //     var id = $(this).data("id");
        //     getRow(id);
        // });

        // $(".info").click(function(e) {
        //     e.preventDefault();
        //     $("#info").modal("show");
        //     var id = $(this).data("id");
        //     getRow(id);
        // });
        $(".tambah2").click(function(e) {
            e.preventDefault();
            $("#tambah2").modal("show");
            var id = $(this).data("id");
            getRow(id);
        });
        $(".tambah").click(function(e) {
            e.preventDefault();
            $("#tambah").modal("show");
            var id = $(this).data("id");
            getRow(id);
        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: '../modal/booking_row2.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('.cust_id').val(response.id);
                    $('.customer_id').html(response.id);
                    $('.del_customer_nama').html(response.nama);
                    // $('.del_customer_visit_date').html(response.visit_date);
                    // $('.del_customer_diagnosis').html(response.diagnosis);
                    // $('.del_customer_weight').html(response.weight);
                    // $('.del_customer_blood_pressure').html(response.blood_pressure);
                    // $('.del_customer_cholesterol_level').html(response.cholesterol_level);
                    // $('.del_customer_prescription').html(response.prescription);


                    // $('#edit_nama').val(response.nama);
                    // $('#edit_diagnosis').val(response.diagnosis);
                    // $('#edit_height').val(response.diagnosis);
                    // $('#edit_weight').val(response.weight);
                    // $('#edit_blood_pressure').val(response.blood_pressure);
                    // $('#edit_cholesterol_level').val(response.cholesterol_level);
                    // $('#edit_prescription').val(response.prescription);


                    $('.t_nama').html(response.nama);
                    $('.t_diagnosis').html(response.diagnosis);
                    $('.t_height').html(response.diagnosis);
                    $('.t_weight').html(response.weight);
                    $('.t_blood_pressure').html(response.blood_pressure);
                    $('.t_cholesterol_level').html(response.cholesterol_level);
                    $('.t_prescription').html(response.prescription);

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