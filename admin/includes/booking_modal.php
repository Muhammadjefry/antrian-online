<!-- UPDATE -->
<!-- <div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit : <span class="del_customer_name"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../modal/booking_edit_save.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" class="cust_id">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nomor Pendaftaran :</label>
                            <input type="text" class="form-control" name="no_antrian" id="edit_no_antrian">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" class="form-control" name="nik" id="edit_nik">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" id="edit_nama">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Phone Number :</label>
                            <input type="text" class="form-control" name="phone" id="edit_phone">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Email :</label>
                            <input type="text" class="form-control" name="username" id="edit_username">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
<!-- FOR DELETE2 -->
<!-- <div class="modal fade" id="delete2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="fa fa-info"></span>Please Confirm</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../modal/delete_pasien.php" method="POST">
                    <input type="hidden" name="id" id="cust_id" class="cust_id">
                    <center>
                        <p>Are you sure want to delete this record</p>
                        Customer name :<span class="del_customer_name"></span>
                    </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-close"></i>
                    No</button>
                <button type="submit" name="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Yes</button>
            </div>
            </form>
        </div>
    </div>
</div> -->
<!-- UPDATE2 -->
<!-- <div class="modal fade" id="edit2">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit : <span class="del_customer_nama"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../modal/booking_edit_save2.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" class="cust_id">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="edit_nama" id="edit_nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Berat Badan</label>
                            <input type="text" class="form-control" name="edit_weight" id="edit_weight">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tinggi Badan</label>
                            <input type="text" class="form-control" name="edit_height" id="edit_height">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tekanan Darah :</label>
                            <input type="text" class="form-control" name="edit_blood_pressure" id="edit_blood_pressure">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Cholestrol :</label>
                            <input type="text" class="form-control" name="edit_cholesterol_level"
                                id="edit_cholesterol_level">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Diagnosis :</label>
                            <input type="text" class="form-control" name="edit_diagnosis" id="edit_diagnosis">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Resep :</label>
                            <input type="text" class="form-control" name="edit_prescription" id="edit_prescription">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
<!-- FOR DELETE -->
<!-- <div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="fa fa-info"></span>Please Confirm</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../modal/booking_delete_record.php" method="POST">
                    <input type="hidden" name="id" id="cust_id" class="cust_id">
                    <center>
                        <p>Are you sure want to delete this record</p>
                        Nomor Pendaftaran :<span class="customer_no_antrian"></span><br>
                        Customer name :<span class="del_customer_name"></span>
                    </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-close"></i>
                    No</button>
                <button type="submit" name="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Yes</button>
            </div>
            </form>
        </div>
    </div>
</div> -->
<!-- FOR INFO -->
<!-- <div class="modal fade" id="info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="fa fa-info-circle me-5"></span>Information</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <p class="text-left"><strong>No Pendaftaran :</strong>
                    <span class="edit_no_antrian text-left"></span>
                </p>
                <p class="text-left"><strong>Nama</strong>
                    <span class="edit_nama text-left"></span>
                </p>
                <p class="text-left"><strong>NIK :</strong>
                    <span class="edit_nik text-left"></span>
                </p>
                <p class="text-left"><strong>Phone Number :</strong>
                    <span class="edit_phone text-left"></span>
                </p>
                <p class="text-left"><strong>Email :</strong>
                    <span class="edit_username text-left"></span>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-close"></i>
                    Close</button>
            </div>

        </div>
    </div>
</div> -->
<!-- ADD -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pasien </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../modal/booking_add.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="login_id" value="<?php echo $_GET['id'];?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tanggal Kunjungan</label>
                            <input type="date" class="form-control" readonly name="tanggal"
                                value="<?php echo date('Y-m-d');?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Obat</label>
                            <input type="text" class="form-control" name="obat" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Keluhan</label>
                            <input type="text" class="form-control" name="keluhan" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Dosis :</label>
                            <input type="text" class="form-control" name="dosis" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Diagnosis :</label>
                            <input type="text" class="form-control" name="diagnosis" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Frekuensi :</label>
                            <input type="text" class="form-control" name="frekuensi" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tindakan :</label>
                            <input type="text" class="form-control" name="tindakan" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Poli :</label>
                            <select class="form-select form-control" aria-label="Default select example" name="poli">
                                <!-- <option selected>Open this select menu</option> -->
                                <option value="umum">Umum</option>
                                <option value="gigi">Gigi</option>
                                <option value="gizi">Gizi</option>
                                <option value="kia">Kia</option>
                                <option value="batra">Batra</option>
                                <option value="psikologi">Psikologi</option>
                                <option value="lansia">Lansia</option>
                                <option value="paru">Paru</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ADD2 -->
<div class="modal fade" id="tambah2">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pasien </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../modal/booking_add2.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="login_id" value="<?php echo $_GET['name'];?>">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Tanggal Kunjungan</label>
                            <input type="date" class="form-control" readonly name="tanggal"
                                value="<?php echo date('Y-m-d');?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Keluhan</label>
                            <input type="text" class="form-control" name="keluhan" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Dosis :</label>
                            <input type="text" class="form-control" name="dosis" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Diagnosis :</label>
                            <input type="text" class="form-control" name="diagnosis" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Frekuensi :</label>
                            <input type="text" class="form-control" name="frekuensi" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tindakan :</label>
                            <input type="text" class="form-control" name="tindakan" id="">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Dari Poli :</label>
                            <select class="form-select form-control" aria-label="Default select example" name="poli1">
                                <!-- <option selected>Open this select menu</option> -->
                                <option value="umum">Umum</option>
                                <option value="gigi">Gigi</option>
                                <option value="gizi">Gizi</option>
                                <option value="kia">Kia</option>
                                <option value="batra">Batra</option>
                                <option value="psikologi">Psikologi</option>
                                <option value="lansia">Lansia</option>
                                <option value="paru">Paru</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Obat</label>
                            <input type="text" class="form-control" name="obat" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Ke Poli :</label>
                            <select class="form-select form-control" aria-label="Default select example" name="poli2">
                                <!-- <option selected>Open this select menu</option> -->
                                <option value="umum">Umum</option>
                                <option value="gigi">Gigi</option>
                                <option value="gizi">Gizi</option>
                                <option value="kia">Kia</option>
                                <option value="batra">Batra</option>
                                <option value="psikologi">Psikologi</option>
                                <option value="lansia">Lansia</option>
                                <option value="paru">Paru</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ADD3 -->
<div class="modal fade" id="tambah3">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pasien </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../modal/booking_add3.php" method="POST">
                <div class="modal-body">
                    <?php 
                                                        require_once"../includes/conn.php";
                                                        if (!isset($_SESSION['username']) || !isset($_SESSION['level']) || ($_SESSION['level'] != 'Umum' && $_SESSION['level'] != 'Gigi' && $_SESSION['level'] != 'Kia' && $_SESSION['level'] != 'Batra' && $_SESSION['level'] != 'Lansia' && $_SESSION['level'] != 'Paru' && $_SESSION['level'] != 'Psikologi' && $_SESSION['level'] != 'Gizi')) {
                                                            exit();
                                                           }
                                                        // $id = $_GET['id'];
                                                        $sql = "SELECT * FROM pasienT 
                                                        LEFT JOIN login ON pasienT.login_id = login.name 
                                                        WHERE pasienT.poli2 = '{$_SESSION['level']}'
                                                        ORDER BY pasienT.tanggal DESC";
                                                        $query = $conn->query($sql);
                                                        if ($query->num_rows > 0) {
                                                        while($row = $query->fetch_assoc()){
                                                            ?>
                    <input type="hidden" name="login_id" value="<?php echo $row['name'];?>">
                    <?php 
                                                        }
                                                        }?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tanggal Kunjungan</label>
                            <input type="date" class="form-control" readonly name="tanggal"
                                value="<?php echo date('Y-m-d');?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Obat</label>
                            <input type="text" class="form-control" name="obat" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Keluhan</label>
                            <input type="text" class="form-control" name="keluhan" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Dosis :</label>
                            <input type="text" class="form-control" name="dosis" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Diagnosis :</label>
                            <input type="text" class="form-control" name="diagnosis" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Frekuensi :</label>
                            <input type="text" class="form-control" name="frekuensi" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tindakan :</label>
                            <input type="text" class="form-control" name="tindakan" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Poli :</label>
                            <select class="form-select form-control" aria-label="Default select example" name="poli">
                                <!-- <option selected>Open this select menu</option> -->
                                <option value="umum">Umum</option>
                                <option value="gigi">Gigi</option>
                                <option value="gizi">Gizi</option>
                                <option value="kia">Kia</option>
                                <option value="batra">Batra</option>
                                <option value="psikologi">Psikologi</option>
                                <option value="lansia">Lansia</option>
                                <option value="paru">Paru</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- chat -->
<div class="modal fade" id="chat">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit : <span class="del_customer_nama"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../modal/send.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" class="cust_id">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tanggal Layanan</label>
                            <input type="text" class="form-control" name="tanggal" id="chat_tanggal">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">No Antrian</label>
                            <input type="text" class="form-control" name="no_antrian" id="chat_no_antrian">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Pasien</label>
                            <input type="text" class="form-control" name="nama" id="chat_nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Number Telephone :</label>
                            <input type="text" class="form-control" name="tlp" id="chat_tlp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Poli :</label>
                            <input type="text" class="form-control" name="poli" id="chat_poli">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Pesan :</label>
                            <textarea name="massage" id="" cols="25" rows="5"
                                style="width: 365px;">"Kepada Pasien dengan Nomor Urut [NomorAntrian], mohon segera menuju area pelayanan. Waktu pelayanan Anda akan dimulai dalam 5 menit. Jangan lupa membawa barcode yang sudah Anda download di pendaftaran. Terima kasih."</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>