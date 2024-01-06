<?php
$page_title = "Date Booking Page";
 include '../includes/header.php'; 
 ?>
<?php 
     ?>
<div class="container container_date">
    <a href="pasien.php" class="btn btn-success mb-2 justify-content-right" style="width: 100px;">
        <i class="fa-solid fa-arrow-rotate-left me-2"></i>Back</a>
    <h5 class="mt-3">Anda telah memasuki tanggal layanan <?php echo date('d F Y'); ?></h5>
    <h6 class="mb-3">Pilih Tanggal Layanan dibawah :</h6>
    <div class="row">
        <?php
    // DB
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'A_project_akhir';

    $cetak = '';
    $dates = array();
    $kek = array();
    $ds = (date('G') > 15) ? 1 : 0; // batas pendaftaran untuk HARI INI adalah pukul 15.00
    $batas = 14; // hari

    for ($c = $ds; $c <= ($batas + $ds); $c++) {
        $x = strtotime('+' . $c . ' day');
        $y = date('Y-m-d', $x);
        $dates[] = $y;
        if ($c == 0 || ($ds == 1 && $c == 1)) {
            $staDay = $y;
        }
        if ($c == $batas) {
            $endDay = $y;
        }
    }
    $lastQnum = array();
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $poli = $_GET['poli'];
    $sql = "SELECT tanggal,MAX(no_antrian) AS qq FROM antrian2 WHERE poli='$poli' AND tanggal BETWEEN '$staDay' AND '$endDay'  GROUP BY tanggal;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $lastQnum[$row['tanggal']] = $row['qq'];
            $kek[] = $row['tanggal'];
        }
    }

    foreach ($dates as $date) {
        $noAkhir = (isset($lastQnum[$date])) ? '<p> Pasien Daftar : ' . $lastQnum[$date] . '</p>' : '';
        $bulan = date('M', strtotime($date));
        $tanggal = date('j', strtotime($date));
        $tahun = date('Y', strtotime($date));
        $tgl =  date('Y-m-d', strtotime($date));
        // berikut adalah template HTMLnya, ubah sesuai kebutuhan
     ?>
        <div class="card tgl">
            <div class="card-body tgl-body">
                <a href="conv_booking.php?date=<?php echo $tgl; ?>&poli=<?php echo $_GET['poli']; ?>" class="link">
                    <span class="span1"><?php echo $tanggal; ?></span>
                    <small><?php echo $bulan; ?> <?php echo $tahun; ?></small>
                    <span class="span2"><?php echo $noAkhir; ?></span>
                </a>
            </div>
        </div>
        <?php 
    }
    ?>
    </div>

</div>

</body>

</html>