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
            <div class="col-md-3 left_col" style="position: fixed;">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0">
                        <a href="#" class="site_title"><span>Dasboard Poli <?php echo $_SESSION['level']; ?></span></a>
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
                                    <a href=""><i class="fa fa-home"></i> Home</a>
                                </li>

                                <li>
                                    <a><i class="fa fa-male"></i>Daftar Pasien
                                        <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="../pasien/pasien.php">Pasien Tertangani</a>
                                        </li>
                                        <li>
                                            <a href="../pasien/pasienT.php">Pasien Tidak Tertangani</a>
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
                    </div>

                    <div class="clearfix"></div>
                    <div class="row mt-2">
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
                                    <h2>List queue today</h2>
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
                                                            <th>No telephone</th>
                                                            <th>Poli</th>
                                                            <th>No Antrian</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            require_once "../includes/conn.php";
                                                            // Pastikan pengguna sudah login dan level-nya adalah umum, gigi, atau kia
                                                            if (!isset($_SESSION['username']) || !isset($_SESSION['level']) || ($_SESSION['level'] != 'Umum' && $_SESSION['level'] != 'Gigi' && $_SESSION['level'] != 'Kia' && $_SESSION['level'] != 'Batra' && $_SESSION['level'] != 'Lansia' && $_SESSION['level'] != 'Paru' && $_SESSION['level'] != 'Psikologi' && $_SESSION['level'] != 'Gizi')) {
                                                             exit();
                                                            }

                                                            $dateToday = date('Y-m-d');
                                                            // Ganti kondisi WHERE menjadi menggunakan level pengguna yang sudah login
                                                            $sql = "SELECT * FROM antrian2 WHERE poli='{$_SESSION['level']}' AND tanggal='$dateToday'";
                                                            $query = $conn->query($sql);
                                                            // Tambahkan kondisi untuk mengecek apakah ada data yang ditemukan atau tidak
                                                            if ($query->num_rows > 0) {
                                                                    while ($row = $query->fetch_assoc()) { ?>
                                                        <tr class="text-center">
                                                            <td><?php echo $row['tanggal']; ?></td>
                                                            <td><?php echo $row['login_id']; ?></td>
                                                            <td><?php echo $row['tlp']; ?></td>
                                                            <td><?php echo $row['poli']; ?></td>
                                                            <td><?php echo $row['no_antrian']; ?></td>
                                                            <td>
                                                                <a href="#" data-id='<?php echo $row['id']; ?>'
                                                                    class="btn btn-success btn-sm chat">Messege<i
                                                                        class="fa fa-comment "
                                                                        style="margin-left: 5px;"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php
    }
} else {
    // Tampilkan pesan jika tidak ada data yang ditemukan
    echo '<tr><td colspan="6" class="text-center pt-5 pb-5">
    Hari ini belum ada yang mendaftar</td></tr>';
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>


    <?php include "../includes/booking_modal.php";?>


    <script>
    $(function() {
        // $(".edit").click(function(e) {
        //     e.preventDefault();
        //     $("#edit").modal("show");
        //     var id = $(this).data("id");
        //     getRow(id);
        // });

        // $(".delete").click(function(e) {
        //     e.preventDefault();
        //     $("#delete").modal("show");
        //     var id = $(this).data("id");
        //     getRow(id);
        // });

        $(".chat").click(function(e) {
            e.preventDefault();
            $("#chat").modal("show");
            var id = $(this).data("id");
            getRow(id);

        });

        // var suc = document.querySelector('.success');
        // var fal = document.querySelector('.failed');
        // suc.addEventListener("click", function() {
        //     fal.style.display = "none";
        // })
        // fal.addEventListener("click", function() {
        //     suc.style.display = "none";
        // })

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: '../modal/chat.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('.cust_id').val(response.id);
                    $('.customer_id').html(response.id);

                    $('.chat_nama').html(response.login_id);
                    $('.chat_poli').html(response.poli);
                    $('.chat_tlp').html(response.tlp);
                    $('.chat_tanggal').html(response.tanggal);
                    $('.chat_no_antrian').html(response.no_antrian);


                    $('#chat_nama').val(response.login_id);
                    $('#chat_poli').val(response.poli);
                    $('#chat_tlp').val(response.tlp);
                    $('#chat_tanggal').val(response.tanggal);
                    $('#chat_no_antrian').val(response.no_antrian);
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