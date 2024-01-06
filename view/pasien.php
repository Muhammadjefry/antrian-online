<?php 
$poli = array(
    array(
        'id' => 'umum',
        'nama' => 'umum',
        'gambar' => 'klinik_umum.png',
    ),
    array(
        'id' => 'gigi',
        'nama' => 'gigi',
        'gambar' => 'klinik_gigi.png',
    ),
    array(
        'id' => 'gizi',
        'nama' => 'gizi',
        'gambar' => 'klinik_gizi.png',
    ),
    array(
        'id' => 'kia',
        'nama' => 'kia',
        'gambar' => 'klinik_kia.png',
    ),
    array(
        'id' => 'batra',
        'nama' => 'batra',
        'gambar' => 'klinik_oti.png',
    ),
    array(
        'id' => 'lansia',
        'nama' => 'lansia',
        'gambar' => 'klinik_degeneratif.png',
    ),
    array(
        'id' => 'psikologi',
        'nama' => 'psikologi',
        'gambar' => 'klinik_psikologi.png',
    ),
    array(
        'id' => 'paru',
        'nama' => 'paru',
        'gambar' => 'klinik_paru.png',
    )
);
?>
<?php
$page_title = "Poli Page";
 include '../includes/header.php'; 
 if(isset($_SESSION['level']) && $_SESSION['level'] == 'pasien'){
 ?>
<div class="container container_pasien">
    <a href="login.php" class="btn btn-success mb-2" style="width: 100px;position:absolute;right:50px;top:20px;"><i
            class="fa-solid fa-arrow-rotate-left me-2"></i>Back</a>
    <h2 style="display: inline;">Halo <?php echo $_SESSION['name']; ?></h2>
    <h3>Silahkan Pilih Poli </h3>
    <div class="row justify-content-center pasien">
        <?php 
        foreach($poli as $p){
            echo '<a href="date_booking.php?poli='.$p['id'].'" class="col-md-4 col-lg-3 col-sm-6 p-4">
            <div class="card">
                <img src="../assets/img/'.$p['gambar'].'" class="card-img-top p-4" alt="...">
                <div class="card-body bg-primary">
                    <p class="card-text text-white text-center">'.$p['nama'].'</p>
                </div>
            </div>
        </a>';
        }
        ?>
    </div>
</div>

<?php 
}else{
    echo 'Silahkan <a href="login.php"> Login </a> Untuk mengakses halaman ini ';
}
?>


</body>

</html>