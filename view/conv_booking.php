<?php 
include '../includes/header.php'; 
if(isset($_GET['date'])){
    $date = $_GET['date'];
}
if(isset($_POST['submit'])){
    $login_id = $_POST['name'];
    $poli = $_POST['poli'];
    $tlp = $_POST['tlp'];
    $conn = new mysqli('localhost','u4812685_irfej','Palm29RGI','u4812685_rgi_29_jefri');
    $dateToday = $_GET['date'];

    $pasien_today = array();
    $sql = "SELECT login_id FROM antrian2 WHERE tanggal='$dateToday' AND poli='$poli'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pasien_today[] = $row['login_id']; 
        }
    }


    
    // $sql = "SELECT no_antrian FROM antrian WHERE date='$dateToday' AND poli='$poli' ORDER BY id DESC LIMIT 1";
    $sql = "SELECT no_antrian FROM antrian2 WHERE tanggal='$dateToday' AND poli='$poli' ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $no = $poli;
            $last_antrian = $row['no_antrian'];
            // Mendapatkan angka dari format yang ada
            $last_nurut = (int)substr($last_antrian, -3);
            $nurut_baru = $last_nurut + 1;
        }
    } else {
        // Jika tidak ada data, buat nomor antrian baru
        $no = $poli;
        $nurut_baru = 1; // Nomor antrian dimulai dari 1
    }

    // Konversi $nurut_baru menjadi string
    $nurut_baru_str = strval($nurut_baru);
    
    // Format nomor antrian dengan nol di depan
    $antrian_formatted = sprintf("%s-%04d", $no, $nurut_baru_str);
    // $antrian_formatted2 = sprintf("%04d", $nurut_baru);
    
    if( !in_array($_SESSION['name'], $pasien_today ) ) {
        $sql = "INSERT INTO antrian2 (login_id,tlp,poli,tanggal,no_antrian) VALUES ('$login_id','$tlp','$poli','$dateToday',$nurut_baru)";
        if($conn->query($sql)){
            $formSubmitted = true;
        }else{
            echo 'oi';
        }
    } else {
        $masssage = "Anda Sudah Terdaftar Hari Ini";
    }
}

?>

<?php
$page_title = "Convirmasi booking Page";
 ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../Barcode/jsBarcode.min.js"></script>

<div class="container">
    <h2 class="text-center mb-2 mt-5">Confirmasi Pendaftaran</h2>
    <h3 class="text-center p-4 text-danger">
        <?php 
                echo isset($masssage)?$masssage:'';
                ?>
    </h3>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="POST" autocomplete="aff">
                <table class="table">
                    <tbody>
                        <tr>

                            <td>Anda telah mendaftar pada tanggal </td>
                            <td>: <?php echo date('d / M / Y',strtotime($date)); ?></td>
                        </tr>
                        <tr>

                            <td>Di poli </td>
                            <td>: <?php echo $_GET['poli']; ?></td>
                        </tr>
                        <tr>

                            <td>Nama </td>
                            <td>: <?php echo $_SESSION['name']; ?></td>
                        </tr>
                        <tr>

                            <td>Telephone</td>
                            <td>: <?php echo $_SESSION['tlp']; ?></td>
                        </tr>
                        <tr>
                            <td>Username </td>
                            <td>: <?php echo $_SESSION['username']; ?></td>
                        </tr>
                        <tr>
                            <td>NIK </td>
                            <td>: <?php echo $_SESSION['nik']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <input type="hidden" name="name" id="" value="<?php echo $_SESSION['name']; ?>">
                <input type="hidden" name="name" id="" value="<?php echo $_SESSION['name']; ?>">
                <input type="hidden" name="tlp" id="" value="<?php echo $_SESSION['tlp']; ?>">
                <input type="hidden" name="no_antrian" id="txt_input"
                    value="<?php echo $antrian_formatted .' '. $dateToday; ?>">
                <input type="hidden" name="username" id="" value="<?php echo $_SESSION['username']; ?>">
                <input type="hidden" name="nik" id="" value="<?php echo $_SESSION['nik']; ?>">
                <input type="hidden" name="poli" id="" value="<?php echo $_GET['poli']; ?>">
                <button type="submit" name="submit" class="btn btn-primary mt-2 mb-3"><i
                        class="fa-solid fa-arrow-up-from-bracket me-2"></i>Submit</button>
                <a href="date_booking.php?poli=<?php echo $_GET['poli']; ?>" class="btn btn-success mt-2 mb-3"><i
                        class="fa-solid fa-arrow-rotate-left me-2"></i>Back</a>
                <a href="../controller/logout.php" class="btn btn-danger mt-2 mb-3" style="margin-left: 230px;"><i
                        class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<?php if (isset($formSubmitted) && $formSubmitted): ?>
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-warning" id="successModalLabel">Register Successfully</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <div class="form-group">
                        <h4 class="text-success">Selamat !!!</h4>
                        <h6>Anda mendapatkan Nomor Antrian : <?php echo $antrian_formatted; ?></h6>
                        <span></span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <h6 class="mb-5">Di Poli : <?php echo $_GET['poli']; ?></h6>
                        <span></span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mt-5">
                        <h6 class="text-center">Gunakan Barcode untuk lebih mudah</h6>
                        <svg id="barcode" class="col-12"></svg>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="downloadBarcode()"><i
                        class="fa-solid fa-download me-2"></i>Donwload Barcode</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Script to show the modal -->
<script>
$(document).ready(function() {
    $('#successModal').modal({
        backdrop: 'static', // prevent closing on clicking outside the modal
        keyboard: false // prevent closing with the keyboard
    });
});

// function redirectToIndex() {
//     window.location.href = '../index.php';
// }
</script>
<?php endif; ?>


<script type="text/javascript">
var text = document.getElementById("txt_input").value;
JsBarcode("#barcode", text);
</script>
<script>
function downloadBarcode(e) {
    const canvas = document.createElement("canvas");
    const svg = document.getElementById("barcode");
    const base64doc = btoa(unescape(encodeURIComponent(svg.outerHTML)));
    const w = parseInt(svg.getAttribute('width'));
    const h = parseInt(svg.getAttribute('height'));
    const img_to_download = document.createElement('img');
    img_to_download.src = 'data:image/svg+xml;base64,' + base64doc;
    console.log(w, h);
    img_to_download.onload = function() {
        console.log('img loaded');
        canvas.setAttribute('width', w);
        canvas.setAttribute('height', h);
        const context = canvas.getContext("2d");
        //context.clearRect(0, 0, w, h);
        context.drawImage(img_to_download, 0, 0, w, h);
        const dataURL = canvas.toDataURL('image/png');
        if (window.navigator.msSaveBlob) {
            window.navigator.msSaveBlob(canvas.msToBlob(), "download.png");
            e.preventDefault();
        } else {
            const a = document.createElement('a');
            const my_evt = new MouseEvent('click');
            a.download = 'download.png';
            a.href = dataURL;
            a.dispatchEvent(my_evt);
        }
        //canvas.parentNode.removeChild(canvas);
    }
}
</script>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script> -->
</body>

</html>